<?php

namespace Controllers;

use App\Ads;
use App\Branch;

class UserDashboard
{
    public function dashboard()
    {
        $ads = (new Ads())->getAds();
        $branches = (new Branch())->getBranches();

        loadView('user-dashboard/dashboard-home', ['ads' => $ads, 'branches' => $branches]);
    }

}