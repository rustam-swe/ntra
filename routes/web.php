<?php

declare(strict_types=1);

use Shohjahon\RentController\AdController;
use Shohjahon\RentController\AdsController;
use Shohjahon\RentController\AuthController;
use Shohjahon\RentController\BranchController;
use Shohjahon\RentController\UserController;
use Shohjahon\RentSrc\Router;

// Home Routes
Router::get('/', fn() => (new AdsController())->loadPage('home'));
Router::get('/admin/home', fn() => (new AdsController())->loadPage('adminHome'), 'auth');

// Branch Routes
Router::get('/admin/branch', fn() => (new BranchController())->loadPage(), 'auth');
Router::get('/add/branch', fn() => loadView('/upsert'), 'auth');
Router::post('/create/branch', fn() => (new BranchController())->createBranch(), 'auth');
Router::get('/branch/{id}', fn(int $id) => (new BranchController())->showOneBranch($id), 'auth');
Router::get('/update/branch/{id}', fn(int $id) => (new BranchController())->showOneBranch($id, 'update'), 'auth');
Router::post('/branch/update', fn() => (new BranchController())->updateControl(
    (int)$_GET['id'],
    $_POST['branchName'],
    $_POST['branchAddress'],
    $_GET['image']
), 'auth');
Router::post('/delete/branch/image', fn() => (new AdController())->handleImageUpload(
    (int)$_GET['id'],
    'branchUpdate',
    $_GET['name'],
    '',
    'branch'
), 'auth');

// User Profile Routes
Router::get('/user/settings', fn() => loadView('/userSettings'), 'auth');
Router::post('/update/user', fn() => (new UserController())->updatePersonalDetail(), 'auth');
Router::post('/update/phone/number', fn() => (new UserController())->updateContact(), 'auth');
Router::post('/update/password', fn() => (new UserController())->updatePassword(), 'auth');
Router::get('/profile', fn() => (new UserController())->loadProfile(), 'auth');

// Authentication Routes
Router::get('/login', fn() => loadView('auth/login'), 'guest');
Router::get('/register', fn() => loadView('auth/register'), 'guest');
Router::post('/loginAd', fn() => (new AuthController())->enterUserWithLogin());
Router::post('/registerAd', fn() => (new AuthController())->enterUserWithRegister());
Router::get('/logOut', fn() => (new AuthController())->logOut());

// Ads Routes
Router::get('/ads/{id}', fn(int $id) => (new AdController())->showOneAd($id), 'auth');
Router::get('/ads/create', fn() => loadView('dashboard/create-ad'), 'auth');
Router::post('/ads/create', fn() => (new AdController())->createAdInfo(), 'auth');
Router::get('/ads/update/{id}', fn(int $id) => (new AdController())->showOneAd($id, 'update'), 'auth');
Router::post('/ads/update', fn() => (new AdController())->updateAdInfo((int)$_GET['id'], (string)$_GET['image']), 'auth');

// Documentation and Deletion Routes
Router::get('/documentation', fn() => loadView('documentation'));
Router::get('/delete', fn() => (new AdController())->deleteAd((int)$_GET['id'], (string)$_GET['image'], (int)$_GET['status']), 'auth');
Router::post('/delete/image', fn() => (new AdController())->handleImageUpload((int)$_GET['id'], "update", $_GET['name'], 'removeImage'), 'auth');

// Admin Dashboard Route
Router::get('/admin', fn() => loadView('dashboard/admin'), 'auth');

// Search
Router::get('/search', fn() => (new AdsController())->search());

// Error Handling
Router::errorResponse(404, 'Not Found');