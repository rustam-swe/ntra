<?php

declare(strict_types=1);

namespace Shohjahon\RentSrc;

use PDO;

class User
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function createUser(string $username, string $position, string $gender, string $phone, string $password): false|array
    {
        $query = "INSERT INTO users (username, position, gender, phone, created_at, password)
                  VALUES (:username, :position, :gender, :phone, NOW(), :password)";
        $stmt  = $this->pdo->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':position', $position);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':phone', $phone);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getUser(int $id): void
    {
        $query = "SELECT * FROM users WHERE id = :id";
        $stmt  = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function getByUser(string $username)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateUser(int $id, string $username, string $email, string $position, string $gender): bool
    {
        $query = "UPDATE users SET username = :username, position = :position, gender = :gender, email = :email, updated_at = NOW()
                  WHERE id = :id";
        $stmt  = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':position', $position);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':email', $email);
        return $stmt->execute();
    }

    public function updateContact(int $id, string $contact): bool
    {
        $query = "UPDATE users SET phone = :phone WHERE id = :id";
        $stmt  = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':phone', $contact);
        return $stmt->execute();
    }

    public function oldPassword(int $id, string $oldPassword): bool
    {
        $query = "SELECT password FROM users WHERE id = :id";
        $stmt  = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return password_verify($oldPassword, $result['password']);
    }

    public function updatePassword(int $id, string $newPassword): bool
    {
        $query = "UPDATE users SET password = :password WHERE id = :id";
        $stmt  = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $password = password_hash($newPassword, PASSWORD_DEFAULT);
        $stmt->bindParam(':password', $password);
        return $stmt->execute();
    }

    public function deleteUser(int $id): void
    {
        $query = "DELETE FROM users WHERE id = :id";
        $stmt  = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

}
