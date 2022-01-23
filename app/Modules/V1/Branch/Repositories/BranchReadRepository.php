<?php

namespace App\Modules\V1\Branch\Repositories;

use App\Modules\V1\Branch\Repositories\Contracts\IBranchReadRepository;
use App\Modules\V1\Branch\Models\Branch;

/**
 */
class BranchReadRepository  implements IBranchReadRepository   
{

    protected $model;

    public function __construct(Branch $model){
                    $this->model = $model;
                }

    public function get(){
                    return $this->model::all();
                }

    public function getById($id){
                    return $this->model::all()->find($id);
                }

}

