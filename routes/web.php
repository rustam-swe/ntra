<?php

declare(strict_types=1);

use App\Router;
use Controllers\AdController;
use Controllers\BranchController;
use Controllers\UserController;

Router::get('/', fn() => (new \Controllers\AppController())->home());
Router::get('/branches', fn() => (new \Controllers\BranchController())->show());
Router::get('/about', fn() => (new \Controllers\AppController())->about());
Router::get('/ads/{id}', fn(int $id) => (new AdController())->show($id));
Router::get('/branches/{id}', fn(int $id) => (new BranchController())->show($id));


Router::get('/profile', fn() => (new UserController())->profile(), 'auth');

Router::get('/ads/create', fn() => (new AdController())->create(), 'auth');
Router::post('/ads/create', fn() => (new AdController())->store());


Router::get('/admin/ads/create', fn() => (new AdController())->create(), 'auth');
Router::post('/admin/ads/store', fn() => (new AdController())->store());
Router::get('/admin/ads/update/{id}', fn(int $id) => (new AdController())->update($id), 'admin');
Router::patch('/admin/ads/update/{id}', fn(int $id) => (new AdController())->store($id));
Router::delete('/ads/delete/{id}', fn(int $id) => (new AdController())->delete($id));

// Statuses
Router::get('/status/create', fn() => loadView('dashboard/create-status'));
Router::post('/status/create', fn() => loadController('createStatus'));

Router::get('/login', fn() => loadView('auth/login'), 'guest');
Router::post('/login', fn() => (new \Controllers\AuthController())->login());

Router::get('/logout', fn() => (new \Controllers\AuthController())->logout(), 'auth');


Router::get('/admin', fn() => loadDashboard('home'), 'admin');
Router::get('/admin/ads', fn() => (new AdController())->index(), 'admin');
Router::get('/admin/branches', fn() => (new \Controllers\BranchController())->index(), 'admin');


Router::get('/admin/users', fn() => (new UserController())->index(), 'admin');
Router::get('/admin/users/{id}', fn(int $id) => (new UserController())->show($id), 'admin');
Router::get('/admin/users/update/{id}', fn(int $id) => (new UserController())->update($id), 'admin');

Router::get('/search', fn() => (new AdController())->search());

Router::errorResponse(404, 'Not Found');

