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
        loadView('dashboard/users', ['users' => (new User())->getUsers()]);
    }

    public function show(int $id): void
    {
        $user = (new User())->getUser($id);
        $ads  = (new Ads())->getUsersAds((new Session())->getId());

        loadView('profile', ['user' => $user, 'ads' => $ads], false);
    }

    public function create(): void
    {
        loadView('dashboard/create-user' );
    }

    public function update(int $id): void
    {
        $user = (new User())->getUser($id);
        loadView('edit-profile', ['user' => $user], false);
    }
    public function loadProfile(): void
    {
      
        $userId = (int) (new Session())->getId();
    
     
        $ads = (new Ads())->getUsersAds($userId);
    
     
        loadView('profile', ['ads' => $ads , 'user' => (new User())->getUser($userId)], false);
    }
    
}
