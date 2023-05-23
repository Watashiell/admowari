<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Backend'], function () {
    Route::resource('dashboard', 'DashboardController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Backend'], function () {
    Route::resource('dashboard', 'DashboardController');
    Route::resource('pendidikan', 'PendidikanController');
    Route::resource('pengalaman_kerja', 'PengalamanKerjaController');
});

Route::group(['namespace' => 'Backend'], function () {
    Route::resource('dashboard', 'DashboardController');
    Route::resource('user', 'UserController');
    Route::resource('pendidikan', 'PendidikanController');
});

Route::get('/session/create', 'SessionController@create');
Route::get('/session/show', 'SessionController@show');
Route::get('/session/delete', 'SessionController@delete');

Route::get('/mahasiswa/{nama}', 'MahasiswaController@index');
Route::get('/formulir', "MahasiswaController@formulir");
Route::post('/formulir/proses', 'MahasiswaController@proses');

Route::get('/cobaerror', 'CobaController@index');
Route::get('/cobaerror/{nama?}', 'CobaController@index');

Route::get('/upload', 'UploadController@upload')->name('upload');
Route::post('/upload/proses', 'UploadController@proses_upload')
    ->name('upload.proses');