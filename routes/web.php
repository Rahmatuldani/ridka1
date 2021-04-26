<?php

use App\Http\Controllers\TestController;
use Illuminate\Routing\RouteRegistrar;
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

Route::get('/', function () {
    if (session('user') != null) {
        return redirect()->route('admin.index');
    } else {
        return view('index');
    }
});

Route::get('/riwayat', 'UserController@riwayat')->name('riwayat');

Route::post('/updaterw/{id}', 'UserController@updaterw')->name('updaterw');

Route::get('/printbar', 'LocationController@barcode')->name('barcode');

Route::resource('/admin', 'AdminController');
Route::resource('/user', 'UserController')->except('index');
Route::resource('/loc', 'LocationController');

Route::get('/test', 'TestController@index')->name('test');

Route::get('/outkar', 'UserController@outkar')->name('outkar');

Route::get('/login/{location}', 'UserController@login');

Route::post('/absen/{id}', 'UserController@absen')->name('absen');

Route::get('/pdf', 'LocationController@createPDF')->name('pdf');

Route::get('/logout', 'AdminController@logout')->name('logout');

Route::get('/rekap', function () {
    return view('rekap');
});

Route::post('/rekap', 'UserController@rekap')->name('rekap');

Route::get('/outloc', 'LocationController@outloc')->name('outloc');

Route::delete('/loc/delete/{id}', 'LocationController@hapus')->name('hapus');
