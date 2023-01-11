<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

                    //user registration APi
    public function register(Request $request){

            $validation= $this->validate($request,[
                'name' => 'required|string',
                'email' => 'required|email:unique,email',
                'password' => 'required|confirmed',
                'phone' => 'nullable|digits:10',
                'address' => 'nullable',
                'images'=>'nullable',
                'DOB' => 'nullable',
                'status' => 'nullable'

            ],[
                'name.required' => 'Name Field is required',
                'email.required' => 'Email Field is required',
                'email.email' => 'Email must be in Email Format',
                'name.string'=> 'Name must be in String',
                'password.required' => 'Field is required',
                'phone.digits' => 'Phone NUmber must be exactly 10',
            ]);

            if ( User::where('email', $request->email)->first()){
                return  response([
                    'message' => 'Email already Register :) Please login to continue',
                    'stauts' => 'failed'
                ]);
            }

//            $password = Has::make($request->password);
            $user =  User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'address' => $request->address,
                'images' => $request->images,
                'dob' => $request->dob,
                'status' => $request->status
            ]);
            $token = $user->createToken($request->email)->plainTextToken;
                return response([
                    'message'=>'User register Successfully',
                    'status' => 'success',
                    'token' => $token,
                ], 201);
    }

                //User Login Api
    Public function login(Request $request){
        $validation= $this->validate($request,[
            'email' => 'required|email:unique,email',
            'password' => 'required',
            ],[
                'email.required' => 'Email field is required',
                'email.email' => 'Email must be in email format',
                'email.email:unique' => 'Email must be unique',
                'password.required' => 'Password filed is required'
        ]);
        $user= User::where('email',$request->email)->first();

        if ($user && Hash::check($request->password, $user->password)){
            $token = $user->createToken($request->email)->plainTextToken;
            return response([
                'message'=>'User Login Successfully',
                'status' => 'success',
                'token' => $token,
            ], 201);
        }

        return response([
                'message' => 'The provided credentials are incorrect',
                    'status' => 'failed'
            ], 401);

    }

            //User logout api
    Public function logout(){
//        $user = Auth::user();
////        $user->revoke();
//        $user->token()->delete();
        auth()->user()->tokens()->delete();
        return response([
            'message'=>'LogOut Successfully',
            'status' => 'Successfully',
        ], 200);
    }

    Public function loggedInUser(){
//        $user = Auth::user();
////        $user->revoke();
//        $user->token()->delete();
      $users =  Auth::user();
        return response([
            'data' => $users,
            'message'=>'User Data ',
            'status' => 'Successfully',
        ], 200);
    }

    public function changePassword(Request $request){
            $user = Auth::user();
            $validation = $this->validate($request,[
                'password' => 'required|confirmed'
            ],[
                'password.required' => 'Password must be required',
                'password.confirmed' => 'Please confirm your password',
            ]);

            $pass= $user->update([
                'password' =>  Hash::make($request->password),
            ]);


//        if (!$pass){
//                return response([
//                    'message' => 'Your password does not change'
//                ]);
//            }
            return response([
                'message' => 'Password change Successfully',
                'status' => 'Successful',
            ]);

    }


}
