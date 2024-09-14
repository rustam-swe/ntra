<?php

declare(strict_types=1);

namespace App;

use JetBrains\PhpStorm\NoReturn;
use PDO;

class Auth
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    #[NoReturn] public function login(string $username, string $password)
    {
//        dd([$username, $password]);

        $user = (new User())->getByUsername($username, $password);
//        dd($user);



        $query = "SELECT users.*, user_roles.role_id
                  FROM users
                      JOIN user_roles ON users.id = user_roles.user_id
                  WHERE id = $user->id";
//        dd($query);


        // |public
        // |- dashboard/profile
        // |--- assets
        // |--- pages
        // |--- partials
        // |- public
        // |--- assets
        // |--- pages
        // |--- partials


        // Execute query
        $userWithRoles = $this->pdo->query($query)->fetch();
//        dd($userWithRoles);

        if ($userWithRoles) {
            $_SESSION['user'] = [
                'username' => $userWithRoles->username,
                'id'       => $userWithRoles->id,
                'role'     => $userWithRoles->role_id
            ];

            if ($userWithRoles->role_id === Role::ADMIN) {
                redirect('/');
            }

            unset($_SESSION['message']['error']);
            redirect('/');
        }

        $_SESSION['message']['error'] = "Wrong email or password";
        redirect('/login');
    }
}