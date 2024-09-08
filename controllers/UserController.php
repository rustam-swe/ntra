<?php

declare(strict_types=1);

namespace Controllers;

use App\Ads;
use App\Session;
use App\User;

class UserController
{
    public function index(): void
    {
        loadView('/dashboard/users', ['users' => (new User())->getUsers()]);
    }

    public function loadProfile(): void
    {
        $ads = (new Ads())->getUsersAds((new Session())->getId());
        loadView('dashboard/home', ['ads' => $ads]);
    }

}