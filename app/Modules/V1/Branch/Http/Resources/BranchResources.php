<?php

namespace App\Module\V1\Branch\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 */
class BranchResources extends JsonResource
{


    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'street' => $this->street,
        ];
    }
}
