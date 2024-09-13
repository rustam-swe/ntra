<?php

declare(strict_types=1);

namespace Controllers;

use App\Ads;
use App\Branch;
use App\Session;
use App\Status;

class AdminAdController
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

    public function create(): void
    {
        loadView('/dashboard/create-ad', [
            'action'   => "/admin/ads/store",
            'ad'       => null,
            'branches' => (new Branch())->getBranches()
        ]);
    }

    public function store(int|null $id = null): void
    {
        if ($_POST['title']
            && $_POST['description']
            && $_POST['price']
            && $_POST['address']
            && $_POST['rooms']
            && $_POST['branch']
            && $_POST['gender']
        ) {
            if ($id) {
                $ad = $this->ads->updateAds(
                    $id,
                    $_POST['title'],
                    trim($_POST['description']),
                    (int)(new Session())->getId(),
                    Status::ACTIVE,
                    (int) $_POST['branch'],
                    $_POST['address'],
                    (float) $_POST['price'],
                    (int) $_POST['rooms'],
                    $_POST['gender']
                );
            } else {
                $ad = $this->ads->createAds(
                    $_POST['title'],
                    trim($_POST['description']),
                    (int)(new Session())->getId(),
                    Status::ACTIVE,
                    (int) $_POST['branch'],
                    $_POST['address'],
                    (float) $_POST['price'],
                    (int) $_POST['rooms'],
                    $_POST['gender']
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

            header('Location: /admin/ads/create');

            exit();
        }

        echo "Iltimos, barcha maydonlarni to'ldiring!";
    }

    public function update(int $id): void
    {
        loadView('dashboard/update-ad', [
            'action'   => "/admin/ads/update/$id",
            'ad'       => $this->ads->getAd($id),
            'branches' => (new Branch())->getBranches(),
        ]);
    }

    public function delete(int $id): void
    {
        $this->ads->deleteAds($id);
        redirect('/admin/ads');
    }

    public function search(): void
    {

        $searchPhrase = $_REQUEST['search_phrase'];
        $searchBranch = $_GET['search_branch'] ? (int) $_GET['search_branch'] : null;
        $searchMinPrice = $_GET['min_price'] ? (int) $_GET['min_price'] : 0;
        $searchMaxPrice = $_GET['max_price'] ? (int) $_GET['max_price'] : PHP_INT_MAX;


        $ads = (new \App\Ads())->superSearch($searchPhrase, $searchBranch, $searchMinPrice, $searchMaxPrice);
        $branches = (new \App\Branch())->getBranches();
        loadView('home', ['ads' => $ads, 'branches' => $branches]);
    }

}
