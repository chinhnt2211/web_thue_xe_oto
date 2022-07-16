<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdminRequest extends FormRequest
{
    /**
     * Determine if the User is authorized to make this request.
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
                'string',
            ],
            'phone' => [
                'nullable',
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
                'nullable',
                'file',
                'image',
            ],
            'cic_back' => [
                'nullable',
                'file',
                'image',
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
                'nullable',
                'file',
                'image',
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
