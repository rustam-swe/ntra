<?php

declare(strict_types=1);

use App\Router;
Router::get('/ads/{id}', function (int $id) {
    loadView(basePath('/controllers/showAd.php'), ['id'=>$id]);
});
Router::get('/users', fn() => require basePath().'/public/pages/single-ad.php');
//Router::get('/users/{id}', fn()=> require basePath().'/public/pages/single-ad.php');
