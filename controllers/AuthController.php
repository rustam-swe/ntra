<?php

declare(strict_types=1);

namespace Controllers;

use App\Auth;

class AuthController
{

    public function login(): void
    {
//        dd($_POST);
        $username = $_POST['username'];
        $password = $_POST['password'];

        (new Auth())->login($username, $password);
    }

}