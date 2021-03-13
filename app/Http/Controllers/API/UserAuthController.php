<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Passport\Passport;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Support\Facades\Password;
use App\Http\Requests\UserForgotPassword;
use App\Http\Requests\UserRegisterRequest;

class UserAuthController extends Controller{
    //customer register api
    public function register(UserRegisterRequest $request) {
        $validated = $request->validated();
        return  $validated ;

        $validated['password'] = Hash::make($validated['password']);
        if($validated) {
            $createUser = User::create($validated)->createToken('authToken');
            $token = $createUser->accessToken;
            return response()->json([
                'success'      => true,
                'responseCode' => 201,
                "accessToken"  => $token
            ]);
       }else{
            return response()->json([
                'status_code' => '401',
                'success'      => false,
            ]);
       }
    }


     //user login
     public function login(UserLoginRequest $request){
        $validated = $request->validated();


          if(!auth()->attempt($validated)){
             return response([
                 'status_code' => '401',
                 'message' => 'Invalid Credetials'
             ]);
          }
          $accessToken = auth()->user()->createToken('authToken')->accessToken;
          return response(['user' =>auth()->user(), 'access_token' => $accessToken ]);
    }

    //user forgot password
    public function forgotPassword(UserForgotPassword $request){

        $randNumber = mt_rand(10,1000000);
        User::where('email', $validated['email'])
        ->update([
            'securityCode' => $randNumber
        ]);

        /*
        / /
        //after updating db we email or send a text to the user;
        */
        $validated = $request->validated();

        $user = User::where('email',   $validated['email'])->first();
        //return $user;
        if($user['securityCode'] ===  $validated['securityCode'] ){
            // Password::sendResetLink($validatedEmail);
            User::where('email', $validated['email'])
                    ->update([
                        'password' => $validated['password']
                    ]);
            return response()->json([
                'responseCode' => 200,
                "message" => 'Password updated successfully, please procced to login']
            );
        }
        return response()->json([
            'responseCode' => 200,
            "user"=> $user,
            "message" => 'User does not exist!'
            ]
        );





    }


}

