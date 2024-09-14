<?php

declare(strict_types=1);

use App\Router;
use Controller\AdController;

Router::get('/', fn() => loadController('home'));

Router::get('/ads/{id}', fn(int $id) => (new AdController())->show($id));
Router::get('/admin/ads/create', fn() => (new AdController())->create(), 'auth');
Router::get('/admin/ads', fn() => (new AdController())->index(), 'auth');
Router::get('/admin/ads/store', fn() => (new AdController())->store(), 'auth');
Router::get('/ads/create', fn() => loadView('dashboard/create-ad'));
Router::post('/ads/create', fn() => (new AdController())->create());
Router::delete('/ads/delete/{id}', fn(int $id) => (new AdController())->delete($id));


Router::get('/ads/update/{id}', fn(int $id) => (new AdController())->update($id));

// Statuses
Router::get('/status/create', fn() => loadView('dashboard/create-status'));
Router::post('/status/create', fn() => loadController('createStatus'));

Router::get('/login', fn() => loadView('auth/login'), 'guest');
Router::post('/login', fn() => (new \Controller\AuthController())->login());

Router::get('/logout', fn() => (new \Controller\AuthController())->logout(), 'auth');

Router::post('/admin/ads/{id}', fn($id) => (new AdController())->update($id));
Router::get('/admin', fn() => loadView('dashboard/home'), 'auth');
Router::get('/admin/branches', fn() => (new \Controller\BranchController())->index(), 'auth');
Router::get('/user/branches', fn() => (new \Controller\BranchController())->indexUser());
Router::get('/branch/same/{id}',fn($id) => (new \Controller\BranchController())->branch($id) );


Router::get('/about', fn() => (new \Controller\UserController())->about());

Router::get('/profile2', fn() => (new \Controller\UserController())->loadProfile(), 'auth');
Router::get('/branch/{id}', fn(int $id)=> (new \Controller\BranchController())->show($id), 'auth');
Router::delete('/ads/delete/{id}', fn(int $id) => (new AdController())->delete($id));
Router::errorResponse(404, 'Not Found');

/**
 * Delete ad:
 * Requirements: ad_id
 *
 * Delete:
 * 1. From ads_image table
 * 2.
 */