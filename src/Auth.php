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

        $users = (new User())->getByUsername($username, $password);

        if (!$users) {
            $_SESSION['message']['error'] = "Wrong email or password";
            redirect('/login');
            return;
        }


        $query = "SELECT users.*, user_roles.role_id
                  FROM users
                      JOIN user_roles ON users.id = user_roles.user_id
                  WHERE id = $users->id";


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


        if ($userWithRoles) {
            $_SESSION['user'] = [
                'username' => $userWithRoles->username,
                'id'       => $userWithRoles->id,
                'role'     => $userWithRoles->role_id
            ];

            if ($userWithRoles->role_id === Role::ADMIN) {
                redirect('/admin');
            }

            unset($_SESSION['message']['error']);
            redirect('/admin');
        }

        $_SESSION['message']['error'] = "Wrong email or password";
        redirect('/login');
    }

    public function register($username,$position,$phone,$gender,$email,$password): bool
    {
        $sql = "INSERT INTO users (username, position, phone, gender, email, password) 
        VALUES (:username, :position, :phone, :gender, :email, :password)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':position', $position);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        if($stmt->execute()){
            redirect('/login');
        }
        else{
            redirect('/register');
        }


    }
    public function check(): int
    {
        if (!isset($_SESSION['user']['id'])) {
            return 0;
        }
        $userId = $_SESSION['user']['id'];

        $query = "SELECT users.*, user_roles.role_id
                  FROM users
                  JOIN user_roles ON users.id = user_roles.user_id
                  WHERE users.id = :userId";
        $statement = $this->pdo->prepare($query);
        $statement->bindParam(':userId', $userId, PDO::PARAM_INT);
        $statement->execute();

        $userWithRoles = $statement->fetch(PDO::FETCH_OBJ);

        if ($userWithRoles) {
            $_SESSION['user'] = [
                'username' => $userWithRoles->username,
                'id' => $userWithRoles->id,
                'role' => $userWithRoles->role_id
            ];
            if($userWithRoles->role_id === Role::ADMIN) {
                return 1;
            }
            return 0;
        }
        return 0;
    }

}