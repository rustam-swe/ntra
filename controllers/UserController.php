<?php

declare(strict_types=1);

namespace Controllers;

use App\Ads;
use App\Session;

class UserController
{
    public function loadProfile(): void
    {
        $ads = (new Ads())->getUsersAds((new Session())->getId());
        loadView('profile', ['ads' => $ads], false);
    }
}