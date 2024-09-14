<?php



namespace Controllers;

class LikeController
{
    private $ads;

    public function __construct()
    {
        $this->ads = new Ads(DB::connect()); 
    }

    public function like(int $ad_id)
    {
        $user_id = 1; 

        if ($ad_id > 0) {
            $success = $this->ads->likeAd($user_id, $ad_id);

            if ($success) {
                header('Location: /ads'); 
                exit();
            } else {
                echo 'Xato yuz berdi.';
            }
        } else {
            echo 'Noaniq reklama ID.';
        }
    }
}
