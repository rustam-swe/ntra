<?php
declare(strict_types=1);

namespace App;

use PDO;

class Like
{
    private PDO $pdo;
    public function __construct()
    {
        $this->pdo = DB::connect();
    }
    public function addLike(int $ads_id, int $user_id): bool
    {
        $stmt = $this->pdo->prepare("INSERT INTO `like` (ads_id, user_id) VALUES (:ads_id, :user_id)");
        $stmt->bindParam('ads_id', $ads_id);
        $stmt->bindParam('user_id', $user_id);

        if ($stmt->execute()) {

            $stmt = $this->pdo->prepare("UPDATE `ads` SET `like_count` = like_count + 1 WHERE `id` = :ads_id");
            $stmt->bindParam('ads_id', $ads_id);
            return $stmt->execute();
        }
        return false;
    }
    public function removeLike(int $ads_id, int $user_id): bool
    {

        $stmt = $this->pdo->prepare("DELETE FROM `like` WHERE `ads_id` = :ads_id AND `user_id` = :user_id");
        $stmt->bindParam(':ads_id', $ads_id);
        $stmt->bindParam(':user_id', $user_id);


        if ($stmt->execute()) {

            $stmt = $this->pdo->prepare("UPDATE `ads` SET `like_count` = like_count - 1 WHERE `id` = :ads_id");
            $stmt->bindParam(':ads_id', $ads_id);

            return $stmt->execute();
        }

        return false;
    }


}


