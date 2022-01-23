<?php

namespace App\Modules\V1\Branch\Repositories\Contracts;

/**
 */
interface IBranchReadRepository
{
    public function get($data);

    public function getById($id);
}
