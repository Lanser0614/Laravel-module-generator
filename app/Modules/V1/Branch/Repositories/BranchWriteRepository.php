<?php

namespace App\Modules\V1\Branch\Repositories;

use App\Modules\V1\Branch\Repositories\Contracts\IBranchWriteRepository;
use App\Modules\V1\Branch\Models\Branch;

/**
 */
class BranchWriteRepository  implements IBranchWriteRepository
{

    protected $model;

    public function __construct(Branch $model)
    {
        $this->model = $model;
    }

    public function create()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
