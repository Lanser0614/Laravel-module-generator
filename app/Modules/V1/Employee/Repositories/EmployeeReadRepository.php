<?php

namespace App\Modules\V1\Employee\Repositories;

use App\Modules\V1\Employee\Repositories\Contracts\IEmployeeReadRepository;
use App\Modules\V1\Employee\Models\Employee;

/**
 */
class EmployeeReadRepository  implements IEmployeeReadRepository
{

    protected $model;

    public function __construct(Employee $model)
    {
        $this->model = $model;
    }

    public function get($data)
    {
        return $this->model::all();
    }

    public function getById($id)
    {
        return $this->model::all()->find($id);
    }
}
