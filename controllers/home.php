<?php

declare(strict_types=1);

$ads = (new \App\Ads())->getAds();
$branches = (new \App\Branch())->getBranches();
//$branch = (new \App\Branch())->getBranch();

loadView('home', ['ads' => $ads, 'branches' => $branches]);