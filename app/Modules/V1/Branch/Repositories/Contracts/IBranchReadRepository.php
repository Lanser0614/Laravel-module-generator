<?php

namespace App\Modules\V1\Branch\Repositories\Contracts;

/**
 */
interface IBranchReadRepository
{
    public function get();

    public function getById($id);

}

