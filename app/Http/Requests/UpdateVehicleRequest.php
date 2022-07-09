<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVehicleRequest extends FormRequest
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
            'name' => [
                'required',
                'string',
            ],
            'status' => [
                'required',
                'numeric',
            ],
            'description' => [
                'required',
                'string',
            ],
            'license_number' => [
                'required',
                'string',
            ],
            'price' => [
                'required',
                'numeric',
            ],
            'rent_price' => [
                'required',
                'numeric',
            ],
            'fine' => [
                'required',
                'numeric',
            ],
            'station_id' => [
                'required',
                'numeric',
            ],
            'brand_id' => [
                'required',
                'numeric',
            ],
            'seating_capacities_id' => [
                'required',
                'numeric',
            ],
        ];
    }
}
