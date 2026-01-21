<?php
class Router
{
    private array $routes = [];

    public function get(string $path, array $action): void
    {
        $regex = preg_replace('/\{(\w+)\}/', '(?P<$1>[^/]+)', $path);
        $regex = '#^' . $regex . '$#';
        $this->routes['GET'][$regex] = $action;
    }

    public function post(string $path, array $action): void
    {
        $this->routes['POST'][$path] = $action;
    }

    public function dispatch(string $uri, string $method): void
    {
        $path = parse_url($uri, PHP_URL_PATH);
        foreach ($this->routes[$method] ?? [] as $regex => $action) {
            if (preg_match($regex, $path, $matches)) {
                [$controller, $action] = $this->routes[$method][$matches];
                $controllerInstance = new $controller();
                $controllerInstance->$action();
                return;
            }
        }
        http_response_code(404);
        echo "Page non trouvée";
    }
}
