<?php

namespace App\Modules\V1\Employee\Repositories\Contracts;

/**
 */
interface IEmployeeReadRepository
{
    public function get($data);

    public function getById($id);

}

