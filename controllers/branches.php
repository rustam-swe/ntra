<?php

declare(strict_types=1);

use App\Branch;

$branches= (new \App\Branch())->getBranches();

loadView('dashboard/branches_user', ['branches' => $branches]);