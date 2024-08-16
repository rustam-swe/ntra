<?php

declare(strict_types=1);

$ad = (new \App\Ads())->getAd($id);

loadView('single-ad', ['ad' => $ad]);
