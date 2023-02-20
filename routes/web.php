<?php

use App\Http\Controllers\admin\Authcontroller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\frontend\HomeController@index');



// ROUTE UNTUK LOGIN

Route::get('/web-admin/login/login', [AuthController::class, 'index']);
Route::get('/web-admin/login/register', [AuthController::class, 'register']);

Route::post('/aksi_register', [AuthController::class, 'aksi_register']);
Route::post('/aksi_login', [AuthController::class, 'aksi_login']);



// middleware auth
Route::group(['middleware' => 'login'], function () {
    Route::get('/dasboard', [Authcontroller::class, 'home']);


    // alumni
    Route::get('/web-admin/alumni', 'App\Http\Controllers\admin\AlumniController@index');
    Route::get('/web-admin/alumni/create', 'App\Http\Controllers\admin\AlumniController@create');
    Route::post('/web-admin/alumni/store', 'App\Http\Controllers\admin\AlumniController@store');
    Route::get('/web-admin/alumni/edit/{id_alumni}', 'App\Http\Controllers\admin\AlumniController@edit');
    Route::delete('/web-admin/alumni/destroy/{id_alumni}', 'App\Http\Controllers\admin\AlumniController@destroy');
    Route::PUT('/web-admin/alumni/update/{id_alumni}', 'App\Http\Controllers\admin\AlumniController@update');

    // berita
    Route::get('/web-admin/berita', 'App\Http\Controllers\admin\BeritaController@index');
    Route::get('/web-admin/berita/create', 'App\Http\Controllers\admin\BeritaController@create');
    Route::post('/web-admin/berita/store', 'App\Http\Controllers\admin\BeritaController@store');
    Route::get('/web-admin/berita/edit/{id}', 'App\Http\Controllers\admin\BeritaController@edit');
    Route::delete('/web-admin/berita/destroy/{id}', 'App\Http\Controllers\admin\BeritaController@destroy');
    Route::PUT('/web-admin/berita/update', 'App\Http\Controllers\admin\BeritaController@update');

    // route company
    Route::get('/web-admin/company', 'App\Http\Controllers\admin\CompanyController@index');
    Route::get('/web-admin/company/create', 'App\Http\Controllers\admin\CompanyController@create');
    Route::post('/web-admin/company/store', 'App\Http\Controllers\admin\CompanyController@store');
    Route::get('/web-admin/company/edit/{id}', 'App\Http\Controllers\admin\CompanyController@edit');
    Route::delete('/web-admin/company/destroy/{id}', 'App\Http\Controllers\admin\CompanyController@destroy');
    Route::PUT('/web-admin/company/update', 'App\Http\Controllers\admin\CompanyController@update');

    // route kontak
    Route::get('/web-admin/kontak', 'App\Http\Controllers\admin\KontakController@index');
    Route::get('/web-admin/kontak/create', 'App\Http\Controllers\admin\KontakController@create');
    Route::post('/web-admin/kontak/store', 'App\Http\Controllers\admin\KontakController@store');
    Route::post('/web-admin/kontak/edit/{id}', 'App\Http\Controllers\admin\KontakController@edit');
    Route::delete('/web-admin/kontak/destroy/{id}', 'App\Http\Controllers\admin\KontakController@destroy');
    Route::PUT('/web-admin/kontak/update', 'App\Http\Controllers\admin\KontakController@update');

    // route jurusan
    Route::get('/web-admin/jurusan', 'App\Http\Controllers\admin\JurusanController@index');
    Route::get('/web-admin/jurusan/create', 'App\Http\Controllers\admin\JurusanController@create');
    Route::post('/web-admin/jurusan/store', 'App\Http\Controllers\admin\JurusanController@store');
    Route::get('/web-admin/jurusan/edit/{id}', 'App\Http\Controllers\admin\JurusanController@edit');
    Route::delete('/web-admin/jurusan/destroy/{id}', 'App\Http\Controllers\admin\JurusanController@destroy');
    Route::PUT('/web-admin/jurusan/update', 'App\Http\Controllers\admin\JurusanController@update');

    // Route dashboard
    Route::get('/web-admin/dashboard', 'App\Http\Controllers\admin\DashboardController@index');

    // Route logout
    Route::get('/logout','App\Http\Controllers\admin\AuthController@destroy');
});
