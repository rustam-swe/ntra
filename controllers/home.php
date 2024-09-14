<?php

declare(strict_types=1);

$ads = (new \App\Ads())->getAds();
$branches = (new \App\Branch())->getBranches();

loadView('home', ['ads' => $ads, 'branches' => $branches]);