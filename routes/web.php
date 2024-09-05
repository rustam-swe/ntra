<?php

declare(strict_types=1);

use App\Router;
use Controllers\AdController;

Router::get('/', fn() => loadController('home'));

Router::get('/ads/{id}', fn(int $id) => (new AdController())->show($id));
Router::get('/ads/create', fn() => loadView('dashboard/create-ad'));
Router::post('/ads/create', fn() => (new AdController())->create());

Router::get('/ads/update/{id}', fn(int $id) => (new AdController())->update($id));

// Statuses
Router::get('/status/create', fn() => loadView('dashboard/create-status'));
Router::post('/status/create', fn() => loadController('createStatus'));

Router::get('/login',  fn() => loadView('auth/login'), 'guest');
Router::post('/login', fn() => (new \Controllers\AuthController())->login());

Router::get('/admin', fn() => (new \Controllers\UserController())->loadProfile(), 'auth');
Router::get('/admin/ads', fn() => (new \Controllers\AdController())->index(), 'auth');

Router::get('/profile2', fn() => (new \Controllers\UserController())->loadProfile(), 'auth');
Router::delete('/ads/delete/{id}', fn(int $id)=>(new AdController())->delete($id));
Router::errorResponse(404, 'Not Found');

/**
 * Branch CRUD:
 * 1. Create
 *  - route: GET: /branches/create
 *  - route: POST: /branches/create
 *  - route: GET: /branches
 * 2. View
 *  - Controller
 *  - Pages
 */