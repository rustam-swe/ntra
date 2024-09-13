<?php

declare(strict_types=1);

namespace Shohjahon\RentSrc;

class Session
{
    public function getSession(): array
    {
        return $_SESSION;
    }
    public function checkSession(): bool
    {
        if (isset($_SESSION['username'])) {
            return true;
        }
        return false;
    }
}