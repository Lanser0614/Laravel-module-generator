<?php

namespace App\Modules\V1\Employee\DTO;

use App\DTO\BaseDTO;
use App\Modules\V1\Employee\Http\Requests\EmployeeCreateRequest;

/**
 */
class EmployeeCreateDTO extends BaseDTO 
{


    public function __construct(EmployeeCreateRequest $request)
                {

                    parent::__construct($request);
                }

}

