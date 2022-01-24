<?php

namespace App\Modules\V1\Branch\Repositories\Contracts;

/**
 */
interface IBranchWriteRepository
{
    public function create($data);

    public function updateContent($data, $id);

    public function delete($id);

}

