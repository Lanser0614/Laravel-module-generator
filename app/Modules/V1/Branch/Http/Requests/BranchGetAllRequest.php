<?php

namespace App\Modules\V1\Branch\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 */
class BranchGetAllRequest extends FormRequest
{



    public function authorize(): bool
    {
        return true;
    }
    public function rules()
    {
        return [
            "perPage" => ["numeric"],
            "page" => ["numeric"],
            "id" => ["numeric"],
            "name" => ["string"],
        ];
    }
}
