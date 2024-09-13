<?php
//
//declare(strict_types=1);
//
//namespace Shohjahon\RentController;
//
//use JetBrains\PhpStorm\NoReturn;
//use Shohjahon\RentSrc\Ads;
//use Shohjahon\RentSrc\Image;
//
//class AdController
//{
//    public function showOneAd(int $id, string $create = null): void
//    {
//        /**
//         * @var $id
//         */
//
//        $ad = (new Ads())->getAd($id);
//
//        if ($create === null) {
//            loadView('single-ad', ['ad' => $ad]);
//            exit();
//        }
//        loadView('dashboard/create-ad', ['ad' => $ad]);
//        exit();
//    }
//
//    public function checkAdInfo()
//    {
//        $requiredFields = ['title', 'description', 'price', 'address', 'rooms'];
//
//        foreach ($requiredFields as $field) {
//            if (empty($_POST[$field])) {
//                exit("Iltimos, barcha maydonlarni to'ldiring!");
//            }
//        }
//        $ad = [
//            'title' => $_POST['title'],
//            'description' => $_POST['description'],
//            'price' => (float)$_POST['price'],
//            'branch' => (int)$_POST['branch'],
//            'address' => $_POST['address'],
//            'rooms' => (int)$_POST['rooms'],
//        ];
//
//        $ads = [];
//
//        foreach ($ad as $key => $value) {
//            $ads[$key] = $value;
//        }
//
//        return $ads;
//    }
//
//    public function createAdInfo(): void
//    {
//        $ad = $this->checkAdInfo();
//
//        $newAdsId = (new Ads())->createAds(
//            $ad['title'],
//            $ad['description'],
//            6,
//            1,
//            1,
//            $ad['address'],
//            $ad['price'],
//            $ad['rooms']
//        );
//
//        if ($newAdsId) {
//            $this->checkAdImage((int)$newAdsId);
//        }
//    }
//
//    #[NoReturn] private function checkAdImage(int $newAdsId): void
//    {
//        $imageHandler = new Image();
//        $fileName = $imageHandler->handleUpload();
//
//        if (!$fileName) {
//            exit('Rasm yuklanmadi!');
//        }
//
//        $imageHandler->addImage($newAdsId, $fileName);
//
//        redirect('/');
//    }
//
//    #[NoReturn] public function updateAdImage(int $ads_id, string $image): void
//    {
//        $imageHandler = new Image();
//        $fileName = $imageHandler->handleUpload();
//
//        if (!$fileName) {
//            exit('Rasm yuklanmadi!');
//        }
//
//        $file = basePath("/public/assets/images/ads/$image");
//        if (file_exists($file)) {
//            if (!unlink($file)) {
//                echo "Faylni o'chirishda xatolik yuz berdi.";
//            }
//        } else {
//            echo "Fayl topilmadi.";
//        }
//
//        $imageHandler->updateImage($ads_id, $fileName);
//
//        redirect('/profile');
//    }
//
//    public function updateAdInfo(int $id, string $image): void
//    {
//        $ad = $this->checkAdInfo();
//
//        $updateAd = (new Ads())->updateAds(
//            $ad['title'],
//            $ad['description'],
//            6,
//            1,
//            1,
//            $ad['address'],
//            $ad['price'],
//            $ad['rooms'],
//            $id
//        );
//
//        if ($updateAd) {
//            $this->updateAdImage($id, $image);
//        }
//    }
//
//    public function deleteAd(int $id, string $image): void
//    {
//        $file = basePath("/public/assets/images/ads/$image");
//        if (file_exists($file)) {
//            if (unlink($file)) {
//                (new Ads())->deleteAds($id);
//            } else {
//                echo "Faylni o'chirishda xatolik yuz berdi.";
//            }
//        } else {
//            echo "Fayl topilmadi.";
//        }
//    }
//}


declare(strict_types=1);

namespace Shohjahon\RentController;

use JetBrains\PhpStorm\NoReturn;
use Shohjahon\RentSrc\Ads;
use Shohjahon\RentSrc\Image;
use Shohjahon\RentSrc\Status;

class AdController
{
    #[NoReturn] public function showOneAd(int $id, ?string $create = null): void
    {
        $view = $create === null ? 'single-ad' : 'dashboard/create-ad';
        loadView($view, ['ad' => (new Ads())->getAd($id)]);
        exit();
    }

    private function validateAdInfo(): array
    {
        $requiredFields = ['title', 'description', 'user', 'branch', 'price', 'address', 'rooms'];
        $adInfo = [];

        foreach ($requiredFields as $field) {
            if (empty($_POST[$field])) {
                exit("Iltimos, barcha maydonlarni to'ldiring!");
            }
            $adInfo[$field] = $_POST[$field];
        }

        return $adInfo;
    }

    public function createAdInfo(): void
    {
        $ad = $this->validateAdInfo();

        $status_id = (new Status())->createStatus('active');

        $newAdsId = (new Ads())->createAds(
            $ad['title'],
            $ad['description'],
            (int)$ad['user'],
            (int)$status_id,
            (int)$ad['branch'],
            $ad['address'],
            (float)$ad['price'],
            (int)$ad['rooms']
        );

        if ($newAdsId) {
            $this->handleImageUpload(adId: (int)$newAdsId, upsert: 'create');
        }
    }

    #[NoReturn] function handleImageUpload(int $adId, string $upsert, ?string $oldImage = null, $remove = null, string $branch = null): void
    {
        $imageHandler = new Image();
        $fileName = $imageHandler->handleUpload($oldImage, $branch);

        if (!$fileName) {
            exit('Rasm yuklanmadi!');
        }
        if ($oldImage) {
            $this->deleteImageFile($oldImage, $branch);
        }
        if ($upsert === 'create') {
            $imageHandler->addImage($adId, $fileName);
            redirect('/');
        }
        if ($remove === 'removeImage') {
            $imageHandler->updateImage($adId, $fileName);
            redirect("/update/ads/{$adId}");
        }
        if ($upsert === 'branchUpdate') {
            $imageHandler->updateBranchImage($adId, $fileName);
            redirect("/update/branch/{$adId}");
        }
        $imageHandler->updateImage($adId, $fileName);
        redirect('/profile');

    }

    #[NoReturn] public function deleteImageFile(string $image, string $perfect = null): void
    {
        if ($perfect === 'branch') {
            $file = basePath("/public/assets/images/ads/branches/$image");
        } else {
            $file = basePath("/public/assets/images/ads/$image");
        }
        if (file_exists($file) && !unlink($file)) {
            exit("Faylni o'chirishda xatolik yuz berdi.");
        }
        if ($perfect === 'delete') {
            $ads_id = (new Image())->deleteImage($image);
            redirect("/ads/update/$ads_id");
        }
    }

    public function updateAdInfo(int $id, string $image): void
    {
        $ad = $this->validateAdInfo();

        (new Status())->updateStatus((int)$_POST['status_id'], $_POST['status']);

        $updateAd = (new Ads())->updateAds(
            $ad['title'],
            $ad['description'],
            (int)$ad['user'],
            (int) $_POST['status_id'],
            (int)$ad['branch'],
            $ad['address'],
            (float)$ad['price'],
            (int)$ad['rooms'],
            $id
        );

        if ($updateAd) {
            $this->handleImageUpload($id, 'update', $image);
        }
    }

    #[NoReturn] public function deleteAd(int $id, string $image, int $status_id): void
    {
        $this->deleteImageFile($image);
        (new Status())->deleteStatus($status_id);
        (new Ads())->deleteAds($id);
    }
}
