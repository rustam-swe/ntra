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

      
    public function create(): void
    {
     
        if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
            if (isset($_POST['branchName']) && isset($_POST['branchAddress'])) {
                $branchName = trim($_POST['branchName']);
                $branchAddress = trim($_POST['branchAddress']);

                if (!empty($branchName) && !empty($branchAddress)) {
                  
                    $branchModel = new Branch();
                    $branchModel->create($branchName, $branchAddress);

                 
                    header('Location: /branch');
                    exit();
                }
            }
        } else {
            
            loadView('dashboard/createBranch');
        }
    }

    public function show(int $id): void
    {
        $branches = (new Branch())->getBranch($id);

        $searchPhrase = "";
        $searchBranch = $branches->id;
        $searchMinPrice = 0;
        $searchMaxPrice = PHP_INT_MAX;


        $ads = (new \App\Ads())->superSearch($searchPhrase, $searchBranch, $searchMinPrice, $searchMaxPrice);
        


        loadView('dashboard/branchS', ['branches' => $branches, 'ads' => $ads]);
    }
}
