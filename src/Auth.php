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

    public function login(string $username, string $password): void
    {
        $user = (new User())->getByUsername($username, $password);

        if (!$user) {
            $_SESSION['message']['error'] = "Wrong email or password";
            redirect('/login');
            return;
        }

        $query = "SELECT users.*, user_role.role_id
                  FROM users
                  JOIN user_role ON users.id = user_role.user_id
                  WHERE users.id = :userId";

        $statement = $this->pdo->prepare($query);
        $statement->bindParam(':userId', $user->id, PDO::PARAM_INT);
        $statement->execute();

        $userWithRoles = $statement->fetch(PDO::FETCH_OBJ);

        if ($userWithRoles) {
            $_SESSION['user'] = [
                'username' => $userWithRoles->username,
                'id'       => $userWithRoles->id,
                'role_id'  => $userWithRoles->role_id
            ];

            if ($userWithRoles->role_id === Role::ADMIN) {
                redirect('/admin');
            } else {
                unset($_SESSION['message']['error']);
                redirect('/admin');
            }
        } else {
            $_SESSION['message']['error'] = "Wrong email or password";
            redirect('/login');
        }
    }

    public function choose(): int
    {
        if (!isset($_SESSION['user']['id'])) {
            return 0;
        }
    
        $userId = $_SESSION['user']['id'];
    
        $query = "SELECT users.*, user_role.role_id
                  FROM users
                  JOIN user_role ON users.id = user_role.user_id
                  WHERE users.id = :userId";
    
        $statement = $this->pdo->prepare($query);
        $statement->bindParam(':userId', $userId, PDO::PARAM_INT);
        $statement->execute();
    
        $userWithRoles = $statement->fetch(PDO::FETCH_OBJ);
    
        if ($userWithRoles) {
            $_SESSION['user'] = [
                'username' => $userWithRoles->username,
                'id'       => $userWithRoles->id,
                'role_id'  => $userWithRoles->role_id
            ];
    
            
            if ($userWithRoles->role_id === 2) {
                return 2; 
            }
    
            return 0;
        }
    
        return 0; 
    }
    
}
