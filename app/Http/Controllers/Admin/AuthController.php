<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function get()
    {
        return auth()->user();
    }
    
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => [
                'required',
                'email',
            ],
            'password' => [
                'required',
                'string',
                'min:6',
            ]
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if(!Auth::guard('api_admin')->attempt($validator->validated())) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        
        $token = Auth::guard('api_admin')->user()->createToken('api_access_token', [
            'superAdmin'
        ]);
        $plainTextToken = $token->plainTextToken;

        return response([
            'status_code' => 200,
            'message' => 'success',
            'token_type' => 'Bearer',
            'api_access_token' => $plainTextToken,
            'admin' => Auth::guard('api_admin')->user(),
            'test' => $token
        ], 200);
    }
}
