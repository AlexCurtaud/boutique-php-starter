<?php

class SkateparkRepository
{
    private array $skateparks = [];

    public function save(Skatepark $skatepark): void
    {
        $this->skateparks[] = $skatepark;
    }

    public function findAll(): array
    {
        return $this->skateparks;
    }

    public function findByName(string $name): ?Skatepark
    {
        foreach ($this->skateparks as $skatepark) {
            if ($skatepark->getName() === $name) {
                return $skatepark;
            }
        }

        return null;
    }

    public function findByCategory(Category $category): array
    {
        return array_filter($this->skateparks, fn ($s) => $s->getCategory() === $category);
    }

    public function delete(Skatepark $skatepark): void
    {
        $this->skateparks = array_filter($this->skateparks, fn ($s) => $s !== $skatepark);
    }
}
