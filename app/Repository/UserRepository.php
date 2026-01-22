<?php

class UserRepository
{
    public function __construct(private PDO $pdo) {}

    // /////////////////// GETTER ////////////////////////////
    public function findAll()
    {
        $finder = $this->pdo->prepare('SELECT * FROM users');
        $finder->execute();

        return $finder->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find(int $id)
    {
        $findById = $this->pdo->prepare('SELECT * FROM users WHERE id=?');
        $findById->execute([$id]);

        return $findById->fetch();
    }

    public function findByEmail(string $email)
    {
        $findProdbyUser = $this->pdo->prepare('SELECT nom FROM users WHERE email=?');
        $findProdbyUser->execute([$email]);

        return $findProdbyUser->fetch();
    }

    // /////////////////// SETTER ////////////////////////////

    public function create(User $user)
    {
        $create = $this->pdo->prepare('INSERT INTO users (nom, email, password) VALUE (?, ?, ?)');
        $create->execute([$user->getName(), $user->getEmail(), password_hash($user->getPassword(), PASSWORD_DEFAULT)]);
        echo 'user created';
    }

    public function update(User $user)
    {
        $update = $this->pdo->prepare('UPDATE users SET nom=? WHERE email=?');
        $update->execute([$user->getName(), $user->getEmail(), password_hash($user->getPassword(), PASSWORD_DEFAULT)]);
    }

    public function delete(User $user)
    {
        $delete = $this->pdo->prepare('DELETE FROM users WHERE nom=?');
        $delete->execute([$user->getName()]);
        echo 'user deleted';
    }
}
