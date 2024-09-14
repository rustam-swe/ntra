<?php

declare(strict_types=1);

namespace Controllers;

use App\Branch;

class BranchController
{
    public function index(): void
    {
        $branches = (new Branch())->getBranches();
        loadView('dashboard/branches', ['branches' => $branches]);
    }
    public  function  branches()
    {
        $branches = (new Branch())->getBranches();

        loadView('branches', ['branches' => $branches]);

    }
}