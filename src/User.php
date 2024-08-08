<?php

declare(strict_types=1);

namespace App;

use PDO;

class User
{
    public function create(
        string $username,
        string $position,
        string $gender,
        string $phone
    ): false|array {
        $pdo = DB::connect();

        $query = "INSERT INTO users (username, position, gender, phone, created_at)
                  VALUES (:username, :position, :gender, :phone, NOW())";
        $stmt  = $pdo->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':position', $position);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':phone', $phone);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getUser(int $id)
    {
        $pdo   = DB::connect();
        $query = "SELECT * FROM users WHERE id = :id";
        $stmt  = $pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateUser(
        int    $id,
        string $username,
        string $position,
        string $gender,
        string $phone
    ) {
        $pdo   = DB::connect();
        $query = "UPDATE users SET username = :username, position = :position, gender = :gender, phone = :phone, updated_at = NOW()
                  WHERE id = :id";
        $stmt  = $pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':position', $position);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':phone', $phone);
        $stmt->execute();
    }

    public function deleteUser(int $id)
    {
        $pdo   = DB::connect();
        $query = "DELETE FROM users WHERE id = :id";
        $stmt  = $pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
