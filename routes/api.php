<?php

use Illuminate\Http\Request;

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


Route::middleware('auth:api')->get('/dashboard', function (Request $request) {
    return $request->dashboard();
});


Route::middleware('auth:api')->get('/allCat', function (Request $request) {
    return $request->allCat();
});

Route::middleware('auth:api')->get('/addCat', function (Request $request) {
    return $request->addCat();
});

Route::middleware('auth:api')->get('/allPro', function (Request $request) {
    return $request->allPro();
});

Route::middleware('auth:api')->get('/addPro', function (Request $request) {
    return $request->addPro();
});