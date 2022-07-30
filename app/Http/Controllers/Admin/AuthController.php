<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use App\Models\Image;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function me()
    {
        $admin = auth()->user();
        $admin->avatarURL = Image::find($admin->avatar)->link;

        return response($admin);
    }

    public function login(AdminLoginRequest $request)
    {
        if (!Auth::guard('api_admin')->attempt($request->validated())) {
            return response('Unauthorized', 401);
        }

        $token = Auth::guard('api_admin')->user()->createToken('token', [
            'superAdmin'
        ]);
        $plainTextToken = $token->plainTextToken;

        return response($plainTextToken);

        // return response([
        //     'token_type' => 'Bearer',
        //     'token' => $plainTextToken,
        //     'admin' => Auth::guard('api_admin')->user(),
        //     'test' => $token
        // ]);
    }
}
