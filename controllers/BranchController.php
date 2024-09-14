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

    public function guestBranches(): void
    {
        $branches = (new Branch())->getBranches();
        loadView('/guestBranches', ['branches' => $branches]);
    }
    public function about(): void
    {
        loadView('/about');
    }
}