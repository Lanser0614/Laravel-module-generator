<?php

namespace App\Modules\V1\Employee\Repositories\Contracts;

/**
 */
interface IEmployeeWriteRepository
{
    public function create();

    public function update();

    public function delete();

}

