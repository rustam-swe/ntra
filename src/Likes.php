<?php

namespace App;

use PDO;

class Likes
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function getLikes(int $id, int $userId): bool
    {
        $query = "SELECT * FROM likes WHERE ads_id = :id AND user_id = :userId";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);

        $stmt->execute();

        // Tekshirish: agar bitta qator bo'lsa, true qaytar
        return $stmt->rowCount() > 0;
    }



    public function addLike(int $userId, int $adsId): void
    {
        $query = "INSERT INTO Likes (user_id, ads_id)
              VALUES (:user_id, :ads_id)";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':user_id', $userId, PDO::PARAM_INT);
        $stmt->bindParam(':ads_id', $adsId, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function updateLike(int $userId, int $adsId): void
    {
        $query = "UPDATE Likes
              SET user_id = :user_id
              WHERE ads_id = :ads_id";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':user_id', $userId, PDO::PARAM_INT);
        $stmt->bindParam(':ads_id', $adsId, PDO::PARAM_INT);
        $stmt->execute();
    }


    public function deleteLike(int $adsId): void
    {
        $query = "DELETE FROM likes
                  WHERE ads_id = $adsId";
        $this->pdo->query($query);
    }


}