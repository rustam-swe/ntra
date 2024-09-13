<?php

declare(strict_types=1);

namespace Shohjahon\RentSrc;

use PDO;

class Branch
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function createBranch(string $name, string $address, string $image): bool
    {
        $stmt = $this->pdo->prepare("INSERT INTO branch (name, address, created_at, branch_image)
                                          VALUES (:name, :address, NOW(), :branch_image)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':branch_image', $image);
        return $stmt->execute();
    }

    public function updateBranch(int $id, string $name, string $address, string $image): bool
    {
        $stmt = $this->pdo->prepare("UPDATE branch SET name = :name, address = :address, branch_image = :branch_image, updated_at = NOW() WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':branch_image', $image);

        return $stmt->execute();
    }

    public function getBranch(): false|array
    {
        $stmt = $this->pdo->prepare("SELECT * FROM branch");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getOneBranch(int $id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM branch WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function deleteBranch(int $id): bool
    {
        $stmt = $this->pdo->prepare("DELETE FROM branch WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function branchImageUpload()
    {
        $name = $_FILES['image']['name'];
        $path = $_FILES['image']['tmp_name'];

        if ($_FILES['image']['error'] === UPLOAD_ERR_NO_FILE) {
            $defaultImagePath = basePath("/public/assets/images/ads/default/default.png");
            $uploadPath = basePath("/public/assets/images/ads/branches");

            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }

            $fileName = uniqid() . '___default.png';
            $fullFilePath = "$uploadPath/$fileName";

            $fileCopied = copy($defaultImagePath, $fullFilePath);

            if (!$fileCopied) {
                exit('Fayl nusxalanmadi');
            }

            return $fileName;
        }

        $uploadPath = basePath("/public/assets/images/ads/branches");

        if (!is_dir($uploadPath)) {
            mkdir($uploadPath);
        }

        $fileName = uniqid() . '___' . $name;
        $fullFilePath = "$uploadPath/$fileName";

        $fileUploaded = move_uploaded_file($path, $fullFilePath);

        if (!$fileUploaded) {
            exit('Fayl yuklanmadi');
        }

        return $fileName;
    }
}