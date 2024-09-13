<?php

declare(strict_types=1);

namespace Shohjahon\RentController;
use JetBrains\PhpStorm\NoReturn;
use Shohjahon\RentSrc\Ads;
use Shohjahon\RentSrc\User;

class UserController
{
    public function loadProfile(): void
    {
        $ads = (new Ads())->getUsersAds($_SESSION['id']);
        require basePath('/resources/view/pages/profile.php');
    }

    public function validatePersonalDetail()
    {
        $requiredFields = ['name', 'email', 'position', 'gender', 'userId'];
        $adInfo = [];

        foreach ($requiredFields as $field) {
            if (empty($_POST[$field])) {
                exit("Iltimos, barcha maydonlarni to'ldiring!");
            }
            $adInfo[$field] = $_POST[$field];
        }

        return $adInfo;
    }

    #[NoReturn] public function updatePersonalDetail(): void
    {
        $pd = $this->validatePersonalDetail();
        (new User())->updateUser((int)$pd['userId'], $pd['name'], $pd['email'], $pd['position'], $pd['gender']);
        $_SESSION['aboutTheUser'] = $_POST['description'];

        redirect('/user/settings');
    }

    public function updateContact(): void
    {
        if (isset($_POST['number']) && isset($_POST['userId'])) {
            (new User())->updateContact((int)$_POST['userId'], $_POST['number']);
            redirect('/user/settings');
        }
    }

    public function validatePassword()
    {
        $requiredFields = ['oldPassword', 'newPassword', 'reTypePassword', 'userId'];
        $adInfo = [];

        foreach ($requiredFields as $field) {
            if (empty($_POST[$field])) {
                exit("Iltimos, barcha maydonlarni to'ldiring!");
            }
            $adInfo[$field] = $_POST[$field];
        }

        return $adInfo;
    }

    #[NoReturn] public function updatePassword(): void
    {
        $pswrd = $this->validatePassword();
        $oldPassword = (new User())->oldPassword((int)$pswrd['userId'], $pswrd['oldPassword']);
        if (!$oldPassword)
        {
            $_SESSION['errorOldPassword'] = "Old password is incorrect!";
            redirect('/user/settings');
        }
        if ($pswrd['newPassword'] !== $pswrd['reTypePassword'])
        {
            $_SESSION['errorNewPassword'] = "New password and retype password do not match!";
            redirect('/user/settings');
        }
        if ($pswrd['newPassword'] === $pswrd['oldPassword'])
        {
            $_SESSION['errorNewPassword'] = "new password and old password are the same!";
            redirect('/user/settings');
        }

        unset($_SESSION['errorOldPassword']);
        unset($_SESSION['errorNewPassword']);
        (new User())->updatePassword((int)$pswrd['userId'], $pswrd['newPassword']);
        redirect('/user/settings');
    }
}