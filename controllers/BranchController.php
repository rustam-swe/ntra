<?php

declare(strict_types=1);

namespace Controllers;

use App\Ads;
use App\Branch;

class BranchController
{
    public function index(): void
    {
        $branches = (new Branch())->getBranches();
        loadDashboard('branches', ['branches' => $branches]);
    }

    public function show(int $id = null): void
    {
        if ($id) {
            $branch = (new Branch())->getBranch($id);
            $ads = (new Ads())->getAdsByBranch($id);
            loadView('single-branch', ['branch' => $branch, 'ads' => $ads]);
        } else {
            $branches = (new Branch())->getBranches();
            loadView('branches', ['branches' => $branches]);
        }
    }
}