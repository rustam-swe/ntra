<?php

declare(strict_types=1);

namespace Controller;

use App\Ads;
use App\Branch;
use App\Session;
use App\Status;

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
//        $ad->image = "../assets/images/ads/$ad->image";

        loadView('single-ad', ['ad' => $ad]);
    }

    public function create()
    {
        loadView('/dashboard/create-ad', [
            'action'   => "/admin/ads/store",
            'ad'       => null,
            'branches' => (new Branch())->getBranches()
        ]);
    }

    public function store(): void
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
                (int)(new Session())->getId(),
                STATUS::ACTIVE,
                ($_POST['branch']),
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

                header('Location: /admin/ads/create');
                exit();
            }

            return;
        }

        echo "Iltimos, barcha maydonlarni to'ldiring!";
    }

    public function update(int $id): void
    {

        loadView('dashboard/update-ad', ['ad' => $this->ads->getAd($id)]);
    }

    public function delete(int $id): void
    {
        $this->ads->deleteAds($id);
        loadView('/dashboard/ads', ['ads' => $this->ads->getAds()]);
    }
}
