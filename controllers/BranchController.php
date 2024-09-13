<?php

declare(strict_types=1);

namespace Shohjahon\RentController;
use JetBrains\PhpStorm\NoReturn;
use Shohjahon\RentSrc\Ads;
use Shohjahon\RentSrc\Branch;

class BranchController
{
    private Branch $branch;

    public function __construct()
    {
        $this->branch = new Branch();
    }

    #[NoReturn] public function updateControl(int $id, string $name, string $address, string $image): void
    {
        $fileName = (new Branch())->branchImageUpload();

        if (!$fileName) {
            exit("Rasim yuklanmadi!");
        }

        if ($image) {
            (new AdController())->deleteImageFile($image, 'branch');
        }

        $updateBranch = (new Branch())->updateBranch($id, $name, $address, $fileName);
        if ($updateBranch) {
            redirect('/admin/branch');
        }
        exit("Yangilash amalga oshmadi");
    }

    #[NoReturn] public function showOneBranch(int $branchId, string $name = null): void
    {
        if ($name === 'update') {
            loadView('upsert', ['branch' => (new Branch())->getOneBranch($branchId)]);
            exit();
        }
        loadView('single-branch', ['branches' => (new Ads())->getAdByBranch($branchId)]);
        exit();
    }
    public function validateAdInfo(): array
    {
        $requiredFields = ['branchName', 'branchAddress'];
        $adInfo = [];

        foreach ($requiredFields as $field) {
            if (empty($_POST[$field])) {
                exit("Iltimos, barcha maydonlarni to'ldiring!");
            }
            $adInfo[$field] = $_POST[$field];
        }

        return $adInfo;
    }
    public function createBranch(): void
    {
        $branch = $this->validateAdInfo();
        $branchImageName = (new Branch())->branchImageUpload();
        if ($branchImageName) {
            $newCreateBranch = (new Branch())->createBranch($branch['branchName'], $branch['branchAddress'], $branchImageName);
            if (!$newCreateBranch) {
                exit("Malumot saqlashda muammo yuz berdi!");
            }
            redirect('/admin/branch');
        }
    }

    public function loadPage(): void
    {
        $branches = $this->branch->getBranch();
        $this->loadView(['branches' => $branches]);
    }

    private function loadView(array $data = []): void
    {
        extract($data);
        require basePath("/resources/view/pages/dashboard/adminBranches.php");
    }

    public function showBranches(): void
    {
        $branches = $this->branch->getBranch();
        loadView('branches', ['branches' => $branches]);
    }
}