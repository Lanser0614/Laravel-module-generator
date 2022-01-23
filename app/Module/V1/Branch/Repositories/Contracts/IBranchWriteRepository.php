<?php

namespace App\Module\V1\Branch\Repositories\Contracts;

/**
 */
interface IBranchWriteRepository
{
    public function create();

    public function update();

    public function delete();

}

