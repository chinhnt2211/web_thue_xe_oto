<?php

namespace App\Http\Controllers;

use App\Enums\ImageTypeEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Admin;
use App\Models\Image;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\Sanctum;

class AdminController extends Controller
{
    private $model;

    function __construct()
    {
        $this->model = Admin::class;
    }

    public function get(Request $request)
    {
        if ($request->get('id')) {
            return response(Admin::findWithAll());
        } else {
            return response(Admin::latestPaginate());
        }
    }

    public function store(StoreAdminRequest $request)
    {   
        // return ['gender' => 1];
        return $request->only(['gender']);
        $admin = new Admin();
        $admin->fill($request->only('gender'));
        // $admin->fill(['gender' => 1]);
        return $admin;
        // return response($request->file('avatar'), 444);
        // return response($request->all(), 444);
        // return response($request->validated(), 444);
        DB::beginTransaction();
        try {
            $admin = new Admin();
            $admin->fill($request->except(['avatar', 'cic_front', 'cic_back']));
            return response('here', 444);
            $admin->password = Hash::make($admin->password);
            $admin->save();

            $admin->location_id = Location::create($request->validated(), 0);

            $admin->avatar = Image::create($request->file('avatar'), 'avatar', $admin);
            $admin->cic_front = Image::create($request->file('cic_front'), 'cic_front', $admin);
            $admin->cic_back = Image::create($request->file('cic_back'), 'cic_back', $admin);

            $admin->save();

            DB::commit();

            return response("success");
        } catch (\Throwable $th) {
            DB::rollBack();
            return response($th->getMessage(), 500);
        }
    }

    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        // return response('here', 444);
        DB::beginTransaction();
        try {
            $admin->fill($request->validated())->save();
            Location::find($admin->location_id)->fill($request->validated())->save();

            if ($request->file('avatar')) {
                Image::find($admin->avatar)->delete();
                $admin->avatar = Image::create($request->file('avatar'), 'avatar', $admin);
            }

            if ($request->file('cic_front')) {
                Image::find($admin->cic_front)->delete();
                $admin->cic_front = Image::create($request->file('cic_front'), 'cic_front', $admin);
            }

            if ($request->file('cic_back')) {
                Image::find($admin->cic_back)->delete();
                $admin->cic_back = Image::create($request->file('cic_back'), 'cic_back', $admin);
            }

            $admin->save();

            DB::commit();

            return response("success");
        } catch (\Throwable $th) {
            DB::rollBack();
            return response($th->getMessage(), 500);
        }
    }

    public function destroy(Admin $admin)
    {
        DB::beginTransaction();
        try {
            $id = $admin->id;
            $location_id = $admin->location_id;
            $avatar = $admin->avatar;
            $cic_front = $admin->cic_front;
            $cic_back = $admin->cic_back;

            $admin->delete();
            Location::find($location_id)->delete();
            Image::find($avatar)->delete();
            Image::find($cic_front)->delete();
            Image::find($cic_back)->delete();

            DB::commit();

            return response("success");
        } catch (\Throwable $th) {
            DB::rollBack();
            return response($th->getMessage(), 500);
        }
    }
}
