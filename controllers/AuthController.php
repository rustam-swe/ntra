<?php

declare(strict_types=1);

namespace Shohjahon\RentController;

use JetBrains\PhpStorm\NoReturn;
use Shohjahon\RentSrc\Auth;
use Shohjahon\RentSrc\User;

class AuthController
{
    public function checkUserWithMiddleware(string|null $middleware = null): void
    {
        if (!$middleware) {
            return;
        }

        if ($middleware === 'guest') {
            if (isset($_SESSION['username'])) {
                redirect('/');
            }
        } elseif ($middleware === 'auth') {
            if (!isset($_SESSION['username'])) {
                redirect('/login');
            }
        } elseif ($middleware === 'admin') {
            if (!isset($_SESSION['username'])) {
                redirect('/login');
            }
        }
    }

    #[NoReturn] public function enterUserWithLogin(): void
    {
        $response = (new Auth())->checkUserLogin($_POST['username'], $_POST['password']);
        if ($response) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            unset($_SESSION['error_login']);
            redirect('/');
        } else {
            $_SESSION['error_login'] = "Username or password is incorrect";
            redirect('/login');
        }
    }

    #[NoReturn] public function enterUserWithRegister(): void
    {
        $response = (new Auth())->checkUserRegister($_POST['phone']);
        if (!$response) {
            unset($_SESSION['error_register']);
            $newUser = (new User())->createUser(
                $_POST['username'],
                $_POST['position'],
                $_POST['gender'],
                $_POST['phone'],
                $_POST['password']
            );
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['id'] = (int)$newUser['id'];
            redirect('/');
        } else {
            $_SESSION['error_register'] = "Username, phone, or password is incorrect";
            redirect('/register');
        }
    }

    #[NoReturn] public function logout(): void
    {
        session_destroy();
        redirect('/login');
    }

}