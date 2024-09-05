<?php

declare(strict_types=1);

namespace Controllers;

use App\Ads;
use App\Session;

class AdController
{
    public Ads $ads;

    public function __construct()
    {
        $this->ads = new Ads();
    }

    public function index(): void
    {
        $ads = $this->ads->getAds();
        loadView('dashboard/ads', ['ads' => $ads]);
    }

    public function show(int $id): void
    {
        $ad        = $this->ads->getAd($id);
        loadView('single-ad', ['ad' => $ad]);
    }

    public function index(): void
    {
        $ads = (new Ads())->getUsersAds((new Session())->getId());
        loadView('dashboard/ads', ['ads' => $ads]);
    }

    public function create(): void
    {
        $title       = $_POST['title'];
        $description = $_POST['description'];
        $price       = (float) $_POST['price'];
        $address     = $_POST['address'];
        $rooms       = (int) $_POST['rooms'];

        if ($_POST['title']
            && $_POST['description']
            && $_POST['price']
            && $_POST['address']
            && $_POST['rooms']
        ) {
            // TODO: Replace hardcoded values
            $newAdsId = $this->ads->createAds(
                $title,
                $description,
                5,
                1,
                1,
                $address,
                $price,
                $rooms
            );

            if ($newAdsId) {
                $imageHandler = new \App\Image();
                $fileName     = $imageHandler->handleUpload();

                if (!$fileName) {
                    exit('Rasm yuklanmadi!');
                }

                $imageHandler->addImage((int) $newAdsId, $fileName);

                header('Location: /');

                exit();
            }

            return;
        }

        echo "Iltimos, barcha maydonlarni to'ldiring!";
    }

    public function update(int $id): void
    {
        loadView('dashboard/create-ad', ['ad' => $this->ads->getAd($id)]);
    }

    public function delete(int $id): void
    {
        $this->ads->deleteAds($id);
    }
}
