<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Repsponse;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    Public function register(Request $request){
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' =>bcrypt($fields['password'])
        ]);

        $token = $user->createToken('MyToken')->plainTextToken;

        $response = [
            'user' =>$user,
            'token' =>$token
        ];

        return response($response, 201);
    }

    Public function login(Request $request){
        $fields = $request->validate([
            'email' => 'requires|string',
            'password' => 'required|string'
        ]);

        //chec email
        $user = User::where('email',$fields['email'])->first();

        //check password
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Bad creds'
            ], 401);
        }
    }

    public function logout(Request $request){
        auth()->user()->tokens()->delete();

        return[
            'message'=>'logged out'
        ];
    }
}
