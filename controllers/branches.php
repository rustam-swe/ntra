<?php

$branches = (new \App\Branch())->getBranches();

loadView('branches', ['branches' => $branches]);
