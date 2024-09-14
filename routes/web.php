<?php

declare(strict_types=1);

use App\Router;
use Controllers\AdController;
use Controllers\UserController;

Router::get('/', fn() => loadController('home'));

Router::get('/ads/{id}', fn(int $id) => (new AdController())->show($id));
Router::get("/branch/{id}", fn(int $id) => (new AdController())->branch($id));

Router::get("/profile",fn()=>(new UserController())->LoadProfile(),'auth');

Router::get('/ads/create', fn() => (new AdController())->create(), 'auth');
Router::post('/ads/store', fn() => (new AdController())->store());
Router::get('/ads/update/{id}', fn(int $id) => (new AdController())->update($id), 'auth');
Router::patch('/ads/update/{id}', fn(int $id) => (new AdController())->store($id));

Router::delete('/ads/delete/{id}', fn(int $id) => (new AdController())->delete($id));

// Statuses
Router::get('/status/create', fn() => loadView('dashboard/create-status'));
Router::post('/status/create', fn() => loadController('createStatus'));

Router::get("/logout", fn() => (new App\Router()) -> logout());

Router::get('/login', fn() => loadView('auth/login'), 'guest');
Router::post('/login', fn() => (new \Controllers\AuthController())->login());

Router::get('/admin', fn() => loadView('dashboard/home'), 'auth');
Router::get('/admin/ads', fn() => (new AdController())->index(), 'auth');
Router::get('/branches', fn() => (new \Controllers\BranchController())->index(), 'auth');

Router::get("/branches",fn()=>(new \Controllers\BranchController())->branches());

Router::post("/like",fn()=>loadController('like'));


Router::get('/admin/users', fn() => (new UserController())->index(), 'auth');
Router::get('/admin/users/{id}', fn(int $id) => (new UserController())->show($id), 'auth');
Router::get('/admin/users/update/{id}', fn(int $id) => (new UserController())->update($id), 'auth');

Router::get('/search', fn() => (new AdController())->search());

Router::errorResponse(404, 'Not Found');

