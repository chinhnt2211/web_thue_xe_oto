<?php

namespace App\Http\Requests;

use App\Enums\AdminRoleEnum;
use App\Enums\AdminStatusEnum;
use App\Enums\GenderEnum;
use App\Models\City;
use App\Models\District;
use App\Models\Station;
use App\Models\Subdistrict;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateAdminRequest extends FormRequest
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
                'bail',
                'required',
                'string',
                'max:20',
            ],
            'last_name' => [
                'bail',
                'required',
                'string',
                'max:30',
            ],
            'email' => [
                'bail',
                'required',
                'email',
                Rule::unique('admins', 'email'),
            ],
            'phone' => [
                'bail',
                'nullable',
                'string',
                'min:9',
                'max:15',
                Rule::unique('admins', 'phone'),
            ],
            'password' => [
                'bail',
                'string',
                'min:8',
                'max:255',
            ],
            'cic_number' => [
                'bail',
                'required',
                'string',
                'min:9',
                'max:12',
                Rule::unique('admins', 'cic_number'),
            ],
            'cic_front' => [
                'bail',
                'required',
                'file',
                'image',
            ],
            'cic_back' => [
                'bail',
                'required',
                'file',
                'image',
            ],
            'dob' => [
                'bail',
                'required',
                'date',
            ],
            'gender' => [
                'bail',
                'required',
                'numeric',
                Rule::in(GenderEnum::getValues()),
            ],
            'avatar' => [
                // 'bail',
                // 'file',
                // 'image',
            ],
            'role' => [
                'bail',
                'required',
                'numeric',
                Rule::in(AdminRoleEnum::getValues()),
            ],
            'status' => [
                'bail',
                'required',
                'numeric',
                Rule::in(AdminStatusEnum::getValues()),
            ],
            'station_id' => [
                'bail',
                'required',
                'numeric',
                Rule::in(Station::getIds()),
            ],
            'city_id' => [
                'bail',
                'required',
                Rule::in(City::getIds()),
            ],
            'district_id' => [
                'bail',
                'required',
                Rule::in(District::getIds()),
            ],
            'subdistrict_id' => [
                'bail',
                'required',
                Rule::in(Subdistrict::getIds()),
            ],
            'address' => [
                'bail',
                'required',
                'max:255',
            ],
        ];
    }
}
