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
    public function create($data)
    {
        $Branch =  $this->model::create($data->getBranch());
        return ["status" => true, "data" => $Branch];
    }
    public function updateContent($data, $id)
    {
        $Branch = $this->model::all()->find($id);
        if ($Branch) {
            $Branch->update($data->getBranch());
            return ["status" => true, "data" => $Branch];
        }
    }
    public function delete($id)
    {
        $Branch = $this->model::all()->find($id);
        if ($Branch) {
            $Branch->delete();
            return ["status" => true];
        }
    }
}
