<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;

class AuthenticationController extends Controller
{
    public function register_user(RegisterRequest $request)
    {
        $request->validated();

        $userData = [
            'name' => $request->name, 
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'roles' => $request->roles,
        ];

        $role = $request->roles;

        $user = User::create($userData)->assignRole($role);

        $token = $user->createToken('sanctumapp')->plainTextToken;

        return response(
            [
                'user' => $user,
                'token' => $token,
            ], 201
        );
    }


    public function login_user(LoginRequest $request)
    {
        $request->validated();

        $user = User::whereEmail($request->email)->first();
        if(!$user || !Hash::check($request->password, $user->password))
        {
            return response(
                [
                    'message' => 'Invalid Credentials'
                ], 422
            );
        }         
        $token = $user->createToken('sanctumapp')->plainTextToken;
        return response(
            [
                'user' => $user,
                'token' => $token,
            ], 200
        );
    
    }
}
