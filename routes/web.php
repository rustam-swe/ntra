<?php

declare(strict_types=1);

use App\Router;
use Controllers\AdminAdController;
use Controllers\UserController;

Router::get('/', fn() => loadController('home'));

Router::get('/ads/{id}', fn(int $id) => (new AdminAdController())->show($id));
Router::get('/admin/ads/create', fn() => (new AdminAdController())->create(), 'auth-admin');
Router::post('/admin/ads/store', fn() => (new AdminAdController())->store(), 'auth-admin');
Router::get('/admin/ads/update/{id}', fn(int $id) => (new AdminAdController())->update($id), 'auth-admin');
Router::patch('/admin/ads/update/{id}', fn(int $id) => (new AdminAdController())->store($id));
Router::delete('/ads/delete/{id}', fn(int $id) => (new AdminAdController())->delete($id));

Router::get('/user/ads/create', fn() => (new \Controllers\UserAdController())->create(), 'auth-user');
Router::post('/user/ads/store', fn() => (new \Controllers\UserAdController())->store(), 'auth-user');
Router::get('/user/ads/update/{id}', fn(int $id) => (new \Controllers\UserAdController())->update($id), 'auth-user');
Router::patch('/user/ads/update/{id}', fn(int $id) => (new \Controllers\UserAdController())->store($id));
Router::delete('/ads/delete/{id}', fn(int $id) => (new \Controllers\UserAdController())->delete($id));

// Statuses
Router::get('/status/create', fn() => loadView('dashboard/create-status'), 'auth-admin');
Router::post('/status/create', fn() => loadController('createStatus'), 'auth-admin');

Router::get('/login', fn() => loadView('auth/login'), 'guest');
Router::post('/login', fn() => (new \Controllers\AuthController())->login(), 'guest');

Router::get('/logout', fn() => (new \Controllers\AuthController())->logout());

Router::get('/admin', fn() => (new \Controllers\AdminDashboard())->dashboard(), 'auth-admin');
Router::get('/admin/ads', fn() => (new AdminAdController())->index(), 'auth-admin');
Router::get('/admin/branches', fn() => (new \Controllers\BranchController())->index(), 'auth-user');

Router::get('/user', fn() => (new \Controllers\UserDashboard())->dashboard(), 'auth-user');
Router::get('/branches', fn() => loadController('branches'));
Router::get('/about', fn() => loadView('about'));
Router::get('/user/ads', fn() => (new \Controllers\UserAdController())->index(), 'auth-user');

Router::get('/admin/users', fn() => (new UserController())->index(), 'auth-admin');
Router::get('/admin/users/{id}', fn(int $id) => (new UserController())->show($id), 'auth-admin');
Router::get('/admin/users/update/{id}', fn(int $id) => (new UserController())->update($id), 'auth-admin');


Router::get('/search', fn() => (new \Controllers\UserAdController())->search());

Router::errorResponse(404, 'Not Found');
