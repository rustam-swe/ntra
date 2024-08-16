<?php

declare(strict_types=1);

use App\Ads;

function dd($args)
{
    echo "<pre>";
    print_r($args);
    echo "</pre>";
    die();
}

function getAds(): false|array
{
    return (new Ads())->getAds();
}

function basePath(string $path): string
{
    return __DIR__.$path;
}

function loadView(string $path, array|null $args = null): void
{
    if (is_array($args)) {
        extract($args);
    }
    require basePath('/public/pages/'.$path.'.php');
}

function loadPartials(string $path, array|null $args = null): void
{
    if (is_array($args)) {
        extract($args);
    }
    require basePath('/public/partials/'.$path.'.php');
}

function loadController(string $path, array|null $args = null): void
{
    if (is_array($args)) {
        extract($args);
    }
    require basePath('/controllers/'.$path.'.php');
}