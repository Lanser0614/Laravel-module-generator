<?php

namespace App\Modules\V1\Employee\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 */
class EmployeeGetAllRequest extends FormRequest
{


    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [];
    }
}
