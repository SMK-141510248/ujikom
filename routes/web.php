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
Route::resource('jabatans','JabatanController');
Route::resource('golongans','GolonganController');
Route::resource('kategori_lemburs','kategori_lemburController');
Route::resource('pegawais','PegawaiController');
Route::resource('lembur_pegawais','Lembur_pegawaiController');
Route::resource('tunjangans','TunjangansController');
Route::resource('tunjangan_pegawais','Tunjangan_pegawaiController');
Route::resource('penggajians','PenggajianController');
Route::resource('Admin','AdminController');
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => ['api'],'prefix' => 'api'], function () {
Route::post('register', 'APIController@register');
Route::post('login', 'APIController@login');
Route::group(['middleware' => 'jwt-auth'], function () {
Route::post('get_user_details', 'APIController@get_user_details');

});

});