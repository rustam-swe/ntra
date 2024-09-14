<?php

declare(strict_types=1);

namespace Controllers;

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
        $ad = $this->ads->getAd($id);
        loadView('single-ad', ['ad' => $ad]);
    }
    public function branch(int $id): void
    {
        $branch1 = (new Branch())->getBranch($id);

        $searchPhrase = "";
        $branch = $branch1->id;
        $minPrice = 0;
        $maxPrice = PHP_INT_MAX;

        $ads          = (new Ads())->search($searchPhrase, $branch, $maxPrice,$minPrice);

        loadView('branch', ['branch1' => $branch1, 'ads' => $ads]);
    }

    public function create(): void
    {
        loadView('/dashboard/create-ad', [
            'action'   => "/ads/store",
            'ad'       => null,
            'branches' => (new Branch())->getBranches()
        ]);
    }

    public function store(int|null $id = null): void
    {
//        dd($_POST);
        if ($_POST['title']
            && $_POST['description']
            && $_POST['price']
            && $_POST['address']
            && $_POST['rooms']
            && $_POST['branch']
        ) {
            if ($id) {
                $ad = $this->ads->updateAds(
                    $id,
                    $_POST['title'],
                    trim($_POST['description']),
                    (new Session())->getId(),
                    Status::ACTIVE,
                    (int) $_POST['branch'],
                    $_POST['address'],
                    (float) $_POST['price'],
                    (int) $_POST['rooms']
                );
            } else {
                $ad = $this->ads->createAds(
                    $_POST['title'],
                    trim($_POST['description']),
                    (new Session())->getId(),
                    Status::ACTIVE,
                    (int) $_POST['branch'],
                    $_POST['address'],
                    (float) $_POST['price'],
                    (int) $_POST['rooms']
                );
            }

            if ($ad && $_FILES['image']['error'] !== UPLOAD_ERR_OK) {
                $imageHandler = new \App\Image();
                $fileName     = $imageHandler->handleUpload();

                if (!$fileName) {
                    exit('Rasm yuklanmadi!');
                }

                $imageHandler->addImage((int) $ad, $fileName);
            }

            header('Location: /ads/create');

            exit();
        }

        echo "Iltimos, barcha maydonlarni to'ldiring!";
    }

    public function update(int $id): void
    {
        loadView('dashboard/update-ad', [
            'action'   => "/ads/update/$id",
            'ad'       => $this->ads->getAd($id),
            'branches' => (new Branch())->getBranches(),
        ]);
    }

    public function delete(int $id): void
    {
        $this->ads->deleteAds($id);
        redirect("profile");
    }

    public function search()
    {
        $searchPhrase = $_REQUEST['search_phrase'];
        $branch = $_GET['branch'] ?(int)$_GET['branch'] : null;
        $minPrice = $_GET['min_price'] ? (int)$_GET['min_price'] : 0;
        $maxPrice = $_GET['max_price'] ? (int)$_GET['max_price'] : PHP_INT_MAX;

        $ads          = (new Ads())->search($searchPhrase, $branch, $maxPrice,$minPrice);
        loadView('home', ['ads' => $ads]);
    }

}
