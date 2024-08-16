<?php

/** @var TYPE_NAME $id */

$ads = new \App\Ads();
$ad = $ads->getAd($id);

view('/pages/single-ad.php',[
        'ad'=>$ad
]);

?>