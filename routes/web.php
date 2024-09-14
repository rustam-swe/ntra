<?php

declare(strict_types=1);

use App\Router;
use Controllers\AdController;
use Controllers\UserController;
//dd($_SERVER['REQUEST_URI']);
Router::get('/', fn() => loadController('home'));

Router::get('/ads/{id}', fn(int $id) => (new AdController())->show($id));
Router::get('/admin/ads/create', fn() => (new AdController())->create(), 'auth');
Router::get('/user/ads/create', fn() => (new AdController())->createAd(), 'auth');
Router::post('/admin/ads/store', fn() => (new AdController())->store(), 'auth');
Router::post('/user/ads/store', fn() => (new AdController())->storeAd(), 'auth');
Router::get('/admin/ads/update/{id}', fn(int $id) => (new AdController())->update($id), 'auth');
Router::patch('/admin/ads/update/{id}', fn(int $id) => (new AdController())->store($id), 'auth');
Router::delete('/ads/delete/{id}', fn(int $id) => (new AdController())->delete($id), 'owner');

// Statuses
Router::get('/status/create', fn() => loadView('dashboard/create-status'), 'auth');
Router::post('/status/create', fn() => loadController('createStatus'), 'auth');

Router::get('/login', fn() => loadView('auth/login'), 'guest');
Router::post('/login', fn() => (new \Controllers\AuthController())->login(), 'guest');
Router::get('/logout', fn() => (new \Controllers\AuthController())->logout(), 'auth');

Router::get('/admin', fn() => loadView('dashboard/home'), 'auth');
Router::get('/admin/ads', fn() => (new AdController())->index(), 'auth');
Router::get('/admin/branches', fn() => (new \Controllers\BranchController())->index(), 'auth');

Router::get('/admin/users', fn() => (new UserController())->index(), 'auth');
Router::get('/admin/users/{id}', fn(int $id) => (new UserController())->show($id), 'auth');
Router::get('/admin/users/update/{id}', fn(int $id) => (new UserController())->update($id), 'auth');

Router::get('/profile/{id}', fn(int $id) => (new UserController())->show($id), 'owner');

Router::get('/about', fn() => loadView('about'));

Router::get('/search', fn() => (new AdController())->search());
Router::get('/search/{id}', fn(int $id) => (new AdController())->searchBranch($id));

Router::errorResponse(404, 'Not Found');

