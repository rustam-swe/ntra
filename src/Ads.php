<?php

declare(strict_types=1);

namespace Shohjahon\RentSrc;

use JetBrains\PhpStorm\NoReturn;
use PDO;

class Ads
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function createAds(string $title, string $description, int $user_id, int $status_id, int $branch_id, string $address, float $price, int $rooms): false|string
    {
        $query = "INSERT INTO ads (title, description, user_id, status_id, branch_id, address, price, rooms, created_at) 
                  VALUES (:title, :description, :user_id, :status_id, :branch_id, :address, :price, :rooms, NOW())";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':status_id', $status_id);
        $stmt->bindParam(':branch_id', $branch_id);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':rooms', $rooms);
        $stmt->execute();

        return $this->pdo->lastInsertId();
    }

    public function getAd($id)
    {
        $query = "SELECT ads.*, name AS image
                  FROM ads
                    LEFT JOIN ads_image ON ads.id = ads_image.ads_id
                  WHERE ads.id = :id";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch();
    }

    public function getAds(): false|array
    {
        $query = "SELECT *, ads.id AS id, ads.address AS address, ads_image.name AS image
                  FROM ads 
                      JOIN branch ON branch.id = ads.branch_id
                      LEFT JOIN ads_image ON ads.id = ads_image.ads_id";
        return $this->pdo->query($query)->fetchAll();
    }
    public function getUsersAds(int $userId): false|array
    {
        $query = "SELECT *, ads.id AS id, ads.address AS address, ads_image.name AS image
                  FROM ads
                    JOIN branch ON branch.id = ads.branch_id
                    LEFT JOIN ads_image ON ads.id = ads_image.ads_id
                  WHERE user_id = $userId"; // FIXME: Prepare userId
        return $this->pdo->query($query)->fetchAll(PDO::FETCH_OBJ);
    }

    public function updateAds(string $title, string $description, int $user_id, int $status_id, int $branch_id, string $address, float $price, int $rooms, int $id): bool
    {
        $query = "UPDATE ads SET title = :title, description = :description, user_id = :user_id,
                  status_id = :status_id, branch_id = :branch_id, price = :price, rooms = :rooms,
                  updated_at = NOW(), address = :address WHERE id = :id";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':status_id', $status_id);
        $stmt->bindParam(':branch_id', $branch_id);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':rooms', $rooms);
        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }

    #[NoReturn] public function deleteAds(int $id): void
    {
        $query = "DELETE FROM ads WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        redirect('/');
    }

    public function searchWithAds(string|null $phrase = null, int|null $branch = null, int|null $min = 0, int|null $max = PHP_INT_MAX): false|array
    {
//        if ($min AND $max)

        $query = "SELECT * FROM ads WHERE title LIKE :phrase OR description LIKE :phrase AND branch_id = :branch AND BETWEEN :min AND :max";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':min', $min);
        $stmt->bindParam(':max', $max);
        $stmt->bindParam(':phrase', $phrase);
        $stmt->bindParam(':branch', $branch);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}