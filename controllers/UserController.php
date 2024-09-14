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
        loadDashboard('users', ['users' => (new User())->getUsers()]);
    }

    public function show(int $id): void
    {
        $user = (new User())->getUser($id);
        $ads  = (new Ads())->getUsersAds((new Session())->getId());

        loadDashboard('profile', ['user' => $user, 'ads' => $ads]);
    }

    public function update(int $id): void
    {
        $user = (new User())->getUser($id);
        loadView('edit-profile', ['user' => $user], false);
    }

    public function profile(): void
    {
        $user = (new User())->getUser((new Session())->getId());
        $ads  = (new Ads())->getUsersAds((new Session())->getId());
        loadDashboard('profile', ['user' => $user, 'ads' => $ads]);
    }
}