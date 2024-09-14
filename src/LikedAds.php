<?php

namespace App;

use PDO;

class LikedAds
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function setAdsAsLiked(int $adsId, int $userId): string|array|bool|null
    {
        $query = 'INSERT INTO liked_ads (ads_id, user_id) VALUES (:adsId, :userId)';
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':adsId', $adsId);
        $stmt->bindParam(':userId', $userId);
        $stmt->execute();
        return $this->pdo->lastInsertId();
    }
}