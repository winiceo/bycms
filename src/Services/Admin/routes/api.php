<?php

/*
|--------------------------------------------------------------------------
| Service - API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for this service.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Prefix: /api/admin
Route::group(['prefix' => 'admin'], function() {

    // The controllers live in src/Services/Admin/Http/Controllers
    // Route::get('/', 'UserController@index');

    Route::get('/', function() {
        return response()->json(['path' => '/api/admin']);
    });
    
    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });

});