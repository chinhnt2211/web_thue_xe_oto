<?php

namespace App\Http\Requests;

use App\Models\City;
use App\Models\District;
use App\Models\Subdistrict;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreStationRequest extends FormRequest
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
                'max:50',
            ],
            'phone' => [
                'bail',
                'required',
                'string',
                'min:9',
                'max:15',
            ],
            'capacity' => [
                'bail',
                'required',
                'integer',
                'min:0',
                'max:500',
            ],
            'location.city_id' => [
                'bail',
                'required',
                Rule::in(City::getIds()),
            ],
            'location.district_id' => [
                'bail',
                'required',
                Rule::in(District::getIds()),
            ],
            'location.subdistrict_id' => [
                'bail',
                'required',
                Rule::in(Subdistrict::getIds()),
            ],
            'location.address' => [
                'bail',
                'required',
                'max:255',
            ],
        ];
    }
}
