<?php

namespace App\Modules\V1\Employee\Repositories;

use App\Modules\V1\Employee\Repositories\Contracts\IEmployeeWriteRepository;
use App\Modules\V1\Employee\Models\Employee;

/**
 */
class EmployeeWriteRepository  implements IEmployeeWriteRepository   
{

    protected $model;

    public function __construct(Employee $model){
                    $this->model = $model;
                }

    public function create(){}

    public function update(){}

    public function delete(){}

}

