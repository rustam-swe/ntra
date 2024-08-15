<?php

$ads = new \App\Ads();
$allAds = $ads->getAds();

view('/pages/ads.php',[
    'ads'=>$allAds
]);

?>