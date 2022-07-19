<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStationRequest extends FormRequest
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
            'name' => [
                'required',
                'string',
                'max:50',
            ],
            'city_id' => [
                'required',
            ],
            'district_id' => [
                'required',
            ],
            'subdistrict_id' => [
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
