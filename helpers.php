<?php

declare(strict_types=1);

use Shohjahon\RentSrc\Ads;
use JetBrains\PhpStorm\NoReturn;
#[NoReturn] function dd($args): void
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
    return __DIR__ . $path;
}

function loadView(string $path, array|null $args = null, bool $loadFromPublic = true): void
{
    if ($loadFromPublic) {
        $file = "/resources/view/pages/$path.php";
    } else {
        $file = "/public/pages/$path.php";
    }

    $filePath = basePath($file);

    if (!file_exists($filePath)) {
        echo "Required view not found: $filePath";
        return;
    }

    if (is_array($args)) {
        extract($args);
    }
    require $filePath;
}

function loadPartials(string $path, array|null $args = null, bool $loadFromPublic = true): void
{
    if (is_array($args)) {
        extract($args);
    }

    if ($loadFromPublic) {
        $file = "/public/partials/$path.php";
    } else {
        $file = "/resources/view/partials/$path.php";
    }

    require basePath($file);
}
function assets(string $path): string
{
    $filePath = basePath("/resources/assets/$path");

    if (!file_exists($filePath)) {
        echo "Required assets/file not found: $filePath";
        return '';
    }

    return $filePath;
}

#[NoReturn] function redirect(string $url): void
{
    header('location: ' . $url);
    exit();
}