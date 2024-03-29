<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name'=> 'required|alpha',
            'last_name'=> 'required|alpha_dash',
            'company_id'=> 'required|numeric|exists:companies,id',
            'email'=> 'nullable|email|unique:employees,email',
            'phone'=> 'nullable|numeric',
        ];
    }
}
