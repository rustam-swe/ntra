<?php

declare(strict_types=1);

namespace Controllers;

use App\Auth;

class AuthController
{

    public function login(): void
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        (new Auth())->login($username, $password);
    }

    public function register(): void
    {
        $username = $_POST['username'];
        $position = $_POST['position'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $password= $_POST['password'];
        (new Auth())->register($username,$position,$phone,$gender,$email,$password);


    }


}