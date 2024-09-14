<?php

namespace Controllers;

class AppController
{
    public function home(): void
    {
        $ads = (new \App\Ads())->getAds();
        loadView('home', ['ads' => $ads]);
    }

    public function about(): void
    {
        loadView('aboutUs');
    }
}