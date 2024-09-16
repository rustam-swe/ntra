<?php

declare(strict_types=1);

namespace App\middlewares;

use App\Router;
use App\Session;

class Authentication
{
    public function handle(string|null $middleware = null): void
    {
        $role = $_SESSION['user']['role'] ?? null;
        if (!$middleware) {
            return;
        }

        if ($middleware === 'guest') {
            if ((new Session())->getUser()) {
                redirect('/');
            }
        } elseif ($middleware === 'auth-admin') {
            if (!(new Session())->getUser()) {
                redirect('/login');
            }
            if($role !== 1)
            {
                Router::errorResponse(404, 'Not Found');
            }
        }elseif ($middleware === 'auth-user') {
            if (!(new Session())->getUser()) {
                redirect('/login');
            }
            if($role !== 2)
            {
                Router::errorResponse(404, 'Not Found');
            }
        }
    }
}