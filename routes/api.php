<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', 'api\UserController@login');
Route::post('register', 'api\UserController@register');
Route::group(['middleware' => 'auth:api'], function(){
Route::post('details', 'api\UserController@details');
});

Route::apiResource('/products','ProductController');

Route::group(['prefix'=>'product'],function(){
    Route::apiResource('/{product}/reviews','ReviewController');
});