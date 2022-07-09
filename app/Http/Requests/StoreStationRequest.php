<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStationRequest extends FormRequest
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
            'name' => [
                'required',
                'string',
                'max:50',
            ],
            'city' => [
                'required',
            ],
            'district' => [
                'required',
            ],
            'subdistrict' => [
                'required',
            ],
            'address' => [
                'required',
                'max:255',
            ],
            'phone' => [
                'required',
                'string',
                'max:15',
            ],
            'capacity' => [
                'required',
                'integer',
                'min:0',
                'max:100',
            ],
        ];
    }
}
