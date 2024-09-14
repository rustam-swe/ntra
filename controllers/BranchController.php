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

    public function show(int $id): void
    {
        $branches = (new Branch())->getBranch($id);

        $searchPhrase = "";
        $searchBranch = $branches->id;
        $searchMinPrice = 0;
        $searchMaxPrice = PHP_INT_MAX;


        $ads = (new \App\Ads())->superSearch($searchPhrase, $searchBranch, $searchMinPrice, $searchMaxPrice);
        


        loadView('dashboard/branches_user', ['branches' => $branches, 'ads' => $ads]);
    }
}