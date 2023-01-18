<?php

use App\Http\Controllers\Api\ResetPasswordController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login']);
Route::post('/send-reset-email',[ResetPasswordController::class,'resetEmailForPassword']);
Route::post('/reset-password/{token}',[ResetPasswordController::class,'reset']);

Route::middleware('auth:sanctum')->group(function(){
    Route::post('/logout',[UserController::class,'logout']);
    Route::get('/logInUser',[UserController::class,'loggedInUser']);
    Route::Put('/change_password',[UserController::class,'changePassword']);
});
