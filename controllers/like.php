<?php

use App\Likes;

if ($_POST['like']) {

    $like = $_POST['like'];
//    dd($like);
    $like = json_decode($like, true);
    $user_id = $like['user_id'];
    $ads_id = $like['ad_id'];
    (new Likes())->addLike((int)$user_id, (int)$ads_id);
    redirect("/");
}
