<?php

declare(strict_types=1);

use App\Router;

Router::get('/', fn ()
    => require basePath('/controllers/ads.php')
);

Router::get('/ads/{id}', fn (int $id)
    => require basePath('/controllers/showAd.php')
);
