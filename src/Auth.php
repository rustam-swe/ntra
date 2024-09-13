<?php

declare(strict_types=1);

namespace App;

use PDO;

class Auth
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function login(string $username, string $password)
    {
        // Get user or fail
        $user = (new User())->getByUsername($username, $password);

        // Get users role
        $query = "SELECT users.*, user_roles.role_id
                  FROM users
                      JOIN user_roles ON users.id = user_roles.user_id
                  WHERE id = $user->id";


        $userWithRoles = $this->pdo->query($query)->fetch();

        if ($userWithRoles) {
            $_SESSION['user'] = [
                'username' => $userWithRoles->username,
                'id'       => $userWithRoles->id,
                'role'     => $userWithRoles->role_id
            ];

            if ($userWithRoles->role_id === Role::ADMIN) {
                redirect('/admin');
            }elseif ($userWithRoles->role_id === Role::USER) {
                redirect('/user');
            }
            unset($_SESSION['message']['error']);
        }

        $_SESSION['message']['error'] = "Wrong email or password";
        redirect('/login');
    }
}