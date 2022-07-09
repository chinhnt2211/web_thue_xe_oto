<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [     
            'first_name' => [
                'required',
                'string',
            ],
            'last_name' => [
                'required',
                'string',
            ],
            'email' => [
                'required',
                'email',
            ],
            'address' => [
                'required',
                'numeric',
            ],
            'phone' => [
                'required',
                'string',
                'min:9',
                'max:15',
            ],
            'password' => [
                'required',
                'password',
            ],
            'cic_number' => [
                'required',
                'numeric',
            ],
            'cic_front' => [
                'required',
                'numeric',
            ],
            'cic_back' => [
                'required',
                'numeric',
            ],
            'dob' => [
                'required',
                'date',
            ],
            'gender' => [
                'required',
                'numeric',
            ],
            'avatar' => [
                'required',
                'numeric',
            ],
            'role' => [
                'required',
                'numeric',
            ],
            'status' => [
                'required',
                'numeric',
            ],
            'station_id' => [
                'required',
                'numeric',
            ],
        ];
    }
}
