<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AuthUserController extends Controller
{

    /**
     * Get a Token via given credentials.
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        };
        if (!Auth::guard('user')->attempt($validator->validated()) ) {
            return response()->json(['error' => 'Unauthorized'], 401);
        };
        $user = Auth::guard('user')->user();
        unset($user['password']);
        $token = Auth::guard('user')->user()->createToken('access_token')->plainTextToken;
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'user' => Auth::guard('user')->user()
        ]);
    }

    /**
     * Register a User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        User::query()->insert(array_merge(
            $validator->validated(),
            ['password' => bcrypt($request->password)]
        ));
        $user = Auth::guard('user')->user();
        unset($user['password']);
        Auth::guard('user')->attempt($request->only('email','password'));
        return response()->json([
            'message' => 'User successfully registered',
            'access_token' => Auth::guard('user')->user()->createToken('access_token')->plainTextToken,
            'user' => $user,
        ], 201);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        Auth::logout();
        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh() {
        $token = Auth::refresh() ;
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'user' => Auth::user()
        ]);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
//        Auth::guard('admin')->id();
        return response()->json(Auth::user());
    }
//    public function changePassWord(Request $request) {
//        $validator = Validator::make($request->all(), [
//            'old_password' => 'required|string|min:6',
//            'new_password' => 'required|string|confirmed|min:6',
//        ]);
//
//        if($validator->fails()){
//            return response()->json($validator->errors()->toJson(), 400);
//        }
//        $userId = auth()->user()->id;
//
//        $user = User::where('id', $userId)->update(
//            ['password' => bcrypt($request->new_password)]
//        );
//
//        return response()->json([
//            'message' => 'User successfully changed password',
//            'user' => $user,
//        ], 201);
//    }
}
