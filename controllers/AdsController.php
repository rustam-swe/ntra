<?php

declare(strict_types=1);

namespace Shohjahon\RentController;

use AllowDynamicProperties;
use Shohjahon\RentSrc\Ads;
use Shohjahon\RentSrc\Branch;

#[AllowDynamicProperties] class AdsController
{
    private Ads $ads;

    public function __construct()
    {
        $this->ads = new Ads();
        $this->branche = new Branch();
    }

    public function loadPage(string $perfect): void
    {
        $ads = $this->ads->getAds();
        $branches = $this->branche->getBranch();

        if ($perfect === 'home') {
            $this->loadView('home', ['ads' => $ads, 'branches' => $branches]);
        } elseif ($perfect === 'adminHome') {
            $this->loadView('adminHome', ['ads' => $ads]);
        } else {
            $branches = $this->branche->getBranch();
            $this->loadView('adminBranches', ['branches' => $branches]);
        }
    }

    private function loadView(string $viewName, array $data = []): void
    {
        extract($data);
        if ($viewName === 'home') {
            require basePath("/resources/view/pages/$viewName.php");
        } elseif ($viewName === 'adminHome') {

            require basePath("/resources/view/pages/dashboard/$viewName.php");
        } else {
            require basePath("/resources/view/pages/dashboard/$viewName.php");
        }
    }

    public function search(): void
    {
        $searchPhrase = $_REQUEST['search_phrase'];
        $searchBranch = $_GET['search_branch'] ? (int) $_GET['search_branch'] : null;
        $searchMinPrice = $_GET['min_price'] ? (int) $_GET['min_price'] : 0;
        $searchMaxPrice = $_GET['max_price'] ? (int) $_GET['max_price'] : PHP_INT_MAX;

        $ads = (new Ads())->superSearch($searchPhrase, $searchBranch, $searchMinPrice, $searchMaxPrice);
        $branches = (new Branch())->getBranch();
        loadView('home', ['ads' => $ads, 'branches' => $branches]);
    }
}
