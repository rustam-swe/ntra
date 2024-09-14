<?php

declare(strict_types=1);

namespace App;

class Branch
{
    private \PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function createBranch(string $name, string $address): bool
    {
        $stmt = $this->pdo->prepare("INSERT INTO branch (name, address, created_at)
                                          VALUES (:name, :address, NOW())");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':address', $address);
        return $stmt->execute();
    }

    public function updateBranch(int $id, string $name, string $address): bool
    {
        $stmt = $this->pdo->prepare("UPDATE branch SET name = :name, address = :address WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':address', $address);

        return $stmt->execute();
    }

    public function getBranch(int $id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM branch WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function getBranches(): false|array
    {
        return $this->pdo->query("SELECT * FROM branch")->fetchAll();
    }

    public function getBranchs()
    {
        $query = "SELECT * from branch";
        return $this->pdo->query($query)->fetchAll();
    }


    public function deleteBranch(int $id): bool
    {
        $stmt = $this->pdo->prepare("DELETE FROM branch WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function search(string $searchPhrase, string|null $branch=null): false|array {
        $searchPhrase = "%{$searchPhrase}%";
        $query = "SELECT *,
                  ads.id AS id,
                  ads.address AS address,
                  ads_image.name AS image
                  FROM ads
                  JOIN branch ON branch.id = ads.branch_id
                  LEFT JOIN ads_image ON ads.id = ads_image.ads_id
                  WHERE (title LIKE :searchPhrase 
                         OR ads.description LIKE :searchPhrase)";

        if ($branch) {
            $query .= " AND branch_id = :branch";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam('branch', $varBranch);
        }

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam('searchPhrase', $searchPhrase);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}