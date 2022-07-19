<?php

namespace App\Http\Requests;

use App\Enums\VehicleStatusEnum;
use App\Models\Brand;
use App\Models\Station;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreVehicleRequest extends FormRequest
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
                'bail',
                'required',
                'string',
            ],
            'status' => [
                'bail',
                'required',
                'numeric',
                Rule::in(VehicleStatusEnum::getValues()),
            ],
            'description' => [
                'bail',
                'required',
                'string',
                // 'max:1024',
            ],
            'license_number' => [
                'bail',
                'required',
                'string',
            ],
            'price' => [
                'bail',
                'required',
                'numeric',
            ],
            'rent_price' => [
                'bail',
                'required',
                'numeric',
            ],
            'fine' => [
                'bail',
                'required',
                'numeric',
            ],
            'station_id' => [
                'bail',
                'required',
                'numeric',
                Rule::in(Station::getIds()),
            ],
            'brand_id' => [
                'bail',
                'required',
                'numeric',
                // Rule::in(Brand::getIds()),
            ],
            'seating_capacities_id' => [
                'bail',
                'required',
                'numeric',
            ],
        ];
    }
}
