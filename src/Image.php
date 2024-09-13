<?php

declare(strict_types=1);

namespace Shohjahon\RentSrc;

use PDO;
use Shohjahon\RentController\AdController;

class Image
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function addImage(int $adsId, string $name): bool
    {
        $query = "INSERT INTO ads_image (ads_id, name)
                 VALUES (:ads_id, :name)";

        $statement = $this->pdo->prepare($query);
        $statement->bindParam(':ads_id', $adsId);
        $statement->bindParam(':name', $name);
        return $statement->execute();
    }

    public function updateBranchImage(int $updateId, string $name): bool
    {
        $query = "UPDATE branch SET branch_image = :branch_image WHERE id = :id";
        $statement = $this->pdo->prepare($query);
        $statement->bindParam(':id', $updateId);
        $statement->bindParam(':branch_image', $name);
        return $statement->execute();
    }

    public function updateImage(int $updateId, string $name): bool
    {
        $query = "UPDATE ads_image SET name = :name WHERE ads_id = :ads_id";

        $statement = $this->pdo->prepare($query);
        $statement->bindParam(':ads_id', $updateId);
        $statement->bindParam(':name', $name);
        return $statement->execute();

    }

    public function handleUpload(string $oldImage = null, string $branch = null): string
    {
        if (!isset($_FILES['image']))
        {
            $defaultImagePath = basePath("/public/assets/images/ads/default/default.png");
            if ($branch === null) {
                $uploadPath = basePath("/public/assets/images/ads");
            } else {
                $uploadPath = basePath('/public/assets/images/ads/branches');
            }
            // Upload katalogi mavjudligini tekshirish
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }

            // Fayl nomini yaratish
            $fileName = uniqid() . '___default.png';
            $fullFilePath = "$uploadPath/$fileName";

            // Default tasvirni yangi joyga nusxalash
            $fileCopied = copy($defaultImagePath, $fullFilePath);

            if (!$fileCopied) {
                exit('Fayl nusxalanmadi');
            }

            return $fileName;
        }

        if ($_FILES['image']['error'] === UPLOAD_ERR_NO_FILE) {
            if ($oldImage !== null) {
                $query = "SELECT name FROM ads_image WHERE name = :name";
                $statement = $this->pdo->prepare($query);
                $statement->bindParam(':name', $oldImage);
                $statement->execute();
                $result = $statement->fetch(PDO::FETCH_ASSOC);
                if ($result['name'] === $oldImage) {
                    redirect('/profile');
                }
            }
        }

        $name = $_FILES['image']['name'];
        $path = $_FILES['image']['tmp_name'];
        // Check if file uploaded
        if ($_FILES['image']['error'] === UPLOAD_ERR_NO_FILE) {
            $defaultImagePath = basePath("/public/assets/images/ads/default/default.png");
            $uploadPath = basePath("/public/assets/images/ads");

            // Upload katalogi mavjudligini tekshirish
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }

            // Fayl nomini yaratish
            $fileName = uniqid() . '___default.png';
            $fullFilePath = "$uploadPath/$fileName";

            // Default tasvirni yangi joyga nusxalash
            $fileCopied = copy($defaultImagePath, $fullFilePath);

            if (!$fileCopied) {
                exit('Fayl nusxalanmadi');
            }

            return $fileName;
        }

        // Extract file name and path
        $uploadPath = basePath("/public/assets/images/ads");

        // Check if upload directory exists
        if (!is_dir($uploadPath)) {
            mkdir($uploadPath);
        }

        // Rename filename
        $fileName = uniqid() . '___' . $name;
        $fullFilePath = "$uploadPath/$fileName";

        // Upload file
        $fileUploaded = move_uploaded_file($path, $fullFilePath);

        if (!$fileUploaded) {
            exit('Fayl yuklanmadi');
        }

        return $fileName;
    }

    public function deleteImage(string $name)
    {
        $query = "SELECT ads_id FROM ads_image WHERE name = :name";
        $statement = $this->pdo->prepare($query);
        $statement->bindParam(':name', $name);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        if ($result['ads_id']) {
            $query = "DELETE FROM ads_image WHERE name = :name";
            $statement = $this->pdo->prepare($query);
            $statement->bindParam(':name', $name);
            $statement->execute();

            return $result['ads_id'];
        }
        dd("Bunday ma'lumot yoq");
    }

}