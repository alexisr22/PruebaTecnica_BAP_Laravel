<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'user'], function(){
    Route::post('/login', 'Auth\AuthController@login');
});


Route::group(['middleware' => 'auth:sanctum'], function() {

    Route::get('/reminders', 'RemindersController@index');
    Route::post('/reminders', 'RemindersController@store');
    Route::put('/reminders/{id}', 'RemindersController@update');
    Route::get('/reminders/{id}', 'RemindersController@show');
    Route::delete('/reminders/{id}', 'RemindersController@destroy');

});