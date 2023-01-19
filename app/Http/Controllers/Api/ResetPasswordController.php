<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PasswordReser;
use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use  Carbon\Carbon;
use Illuminate\Testing\Fluent\Concerns\Has;

class ResetPasswordController extends Controller
{
    public function resetEmailForPassword(Request $request){
            //        Validate email first
        $validation =  $this->validate($request,[
           'email' => 'required|email'
        ],[
            'email.required' => 'Email field is required',
            'email.email' => 'Email must be in email format',
        ]);

        //  Check email exists or not
        $email = $request->email;
        $user = User::where('email',$email)->first();

        if (!$user){
                return response([
                   'message' => 'user does not exists',
                    'status' => 'failed',
                ], 404);
        }
        //Generate Token
        $token = str::random(60);

        //Saving data to password reset table
        PasswordReser::create([
            'email'=> $email,
            'token' => $token,
            'created_at' => carbon::now(),
        ]);
//        dump('http://127.0.0.1/8000/api/user/reset'.$token);

        Mail::send('reset', ['token' => $token], function(Message $message)use ($email){
            $message->subject('Reset your password');
            $message->to($email);
        });
            return response([
                'message'=> 'Reset Password link send successfully check your email',
                'status' => 'success',
            ]);
    }


    public function reset(Request $request, $token){
        //  $usersss= Auth::user();
         //password reset ma vhako token ra user bata aako token url bata, thapaune kun user ko ho vhanera
        $validation= $this->validate($request,[
            'password' => 'required|confirmed'
        ]);

        $pass = PasswordReser::where('token', $token)->first();
//            dd($pass);
        if (!$pass){
            return response([
                'message' => 'Invalid Token or Expired Token',
                'status' => 'Failed',
            ]);
        }
        $user = User::where('email', $pass->email)->first();
//        $usersss->update([
//            'password' => Hash::make($request->password),
//        ]);
        $user->password = Hash::make($request->password);
        $user->save();
        PasswordReser::where('email',$user->email)->delete();
        return response([
            'message' => 'Password reset successfully',
            'status' => 'Success',
        ], 200);
    }
}
