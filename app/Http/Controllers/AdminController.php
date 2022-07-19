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
            $data = Admin::findWithAll($request->get('id'));
        } else {
            $data = Admin::latestWithLess()
                ->paginate();
        }

        return response($data);
    }

    public function store(StoreAdminRequest $request)
    {
        // return $request->validated();
        DB::beginTransaction();
        try {
            $admin = new Admin();
            $admin->fill($request->except('avatar', 'cic_front', 'cic_back'));
            $admin->password = Hash::make($admin->password);
            $admin->save();

            $location = new Location();
            $location->type = 0;
            $location->fill($request->validated())->save();
            $admin->location_id = $location->id;

            if($request->file('avatar')) {
                $image = new Image();
                $image->type = ImageTypeEnum::AVATAR;
                $image->link = $request->file('avatar')
                    ->storeAs('admins/' . $admin->id, 'avatar' . '.' . $request->file('avatar')->extension());
                $image->save();
                $admin->avatar = $image->id;
                // return $image;
            }
            
            if($request->file('cic_front')) {
                $image = new Image();
                $image->type = ImageTypeEnum::CIC_FRONT;
                $image->link = $request->file('cic_front')
                    ->storeAs('admins/' . $admin->id, 'cic_front' . '.' . $request->file('avatar')->extension());
                $image->save();
                $admin->cic_front = $image->id;
            }
            
            if($request->file('cic_back')) {
                $image = new Image();
                $image->type = ImageTypeEnum::CIC_BACK;
                $image->link = $request->file('cic_back')
                    ->storeAs('admins/' . $admin->id, 'cic_back' . '.' . $request->file('avatar')->extension());
                $image->save();
                $admin->cic_back = $image->id;
            }
            

            $admin->save();

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            return response($th->getMessage(), 500);
        }

        return response("success");
    }

    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        DB::beginTransaction();
        try {
            $admin->fill($request->validated())->save();
            Location::find($admin->location_id)->fill($request->validated())->save();


            if($request->file('avatar')) {
                $image = new Image();
                $image->type = ImageTypeEnum::AVATAR;
                $image->link = $request->file('avatar')
                    ->storeAs('admins/' . $admin->id, 'avatar' . $request->file('avatar')->extension());
                $image->save();
                $admin->avatar = $image->id;
                // return $image;
            }
            
            if($request->file('cic_front')) {
                $image = new Image();
                $image->type = ImageTypeEnum::CIC_FRONT;
                $image->link = $request->file('cic_front')
                    ->storeAs('admins/' . $admin->id, 'cic_front' . $request->file('avatar')->extension());
                $image->save();
                $admin->cic_front = $image->id;
            }
            
            if($request->file('cic_back')) {
                $image = new Image();
                $image->type = ImageTypeEnum::CIC_BACK;
                $image->link = $request->file('cic_back')
                    ->storeAs('admins/' . $admin->id, 'cic_back' . $request->file('avatar')->extension());
                $image->save();
                $admin->cic_back = $image->id;
            }

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            return response($th->getMessage(), 500);
        }

        return response("success");
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
            Storage::deleteDirectory('admins/' . $id);

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            return response($th->getMessage(), 500);
        }

        return response("success");
    }
}
