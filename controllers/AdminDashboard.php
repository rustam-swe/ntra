<?php

namespace Controllers;

use App\Ads;
use App\Branch;

class AdminDashboard
{
    public function dashboard()
    {
        $ads = (new Ads())->getAds();
        $branches = (new Branch())->getBranches();

        loadView('dashboard/home', ['ads' => $ads, 'branches' => $branches]);
    }
}