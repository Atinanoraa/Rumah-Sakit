<?php

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
Route::get('login',"LoginController@index");
Route::post('auth-login', 'LoginController@authLogin');
Route::get('logout', 'LoginController@logout');

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function () {

    Route::get('/','DashboardController@index')->name('home');

    // Poli
    Route::get("poli","PoliController@list");
    Route::get('poli/create', 'PoliController@create');
    Route::post('poli/save', 'PoliController@save');
    Route::get("poli/edit/{id}","PoliController@edit");
    Route::post("poli/update/{id}","PoliController@update");
    Route::get("poli/delete/{id}","PoliController@delete");

    // Pasien
    Route::get('pasien','PasienController@index');
    Route::get('pasien/create', 'PasienController@create');
    Route::post('pasien/save','PasienController@save');
    Route::get('pasien/edit/{id}', 'PasienController@edit');
    Route::post('pasien/update/{id}', 'PasienController@update');
    Route::get('pasien/delete/{id}', 'PasienController@destroy');

    // Riwayat Penyakit
    Route::get('riwayat','RiwayatController@index');

    // Rawat Inap
    Route::get('rawat-inap', 'RawatInapController@index');
    Route::get('rawat-inap/create','RawatInapController@create');
    Route::post('rawat-inap/store', 'RawatInapController@store');
    Route::get('rawat-inap/edit/{id}', 'RawatInapController@edit');
    Route::post('rawat-inap/update/{id}', 'RawatInapController@update');
    Route::get('rawat-inap/delete/{id}', 'RawatInapController@destroy');

    // Apotek
    Route::get("apotek","ApotekController@list");
    Route::get('apotek/create', 'ApotekController@create');
    Route::post('apotek/save', 'ApotekController@save');
    Route::get("apotek/edit/{id}","ApotekController@edit");
    Route::post("apotek/update/{id}","ApotekController@update");
    Route::get("apotek/delete/{id}","ApotekController@delete");

    //chart
    Route::get('chart', 'ChartController@index');
});
