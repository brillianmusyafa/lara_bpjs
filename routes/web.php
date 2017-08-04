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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/p/program','HomeController@program')->name('p.program');
Route::get('/p/iuran','HomeController@iuran')->name('p.iuran');
Route::get('/p/persyaratan','HomeController@persyaratan')->name('p.persyaratan');
Route::get('/p/pendaftaran','HomeController@pendaftaran')->name('p.pendaftaran');
Route::post('/p/pendaftaran','HomeController@postPendaftaran')->name('p.postPendaftaran');
Route::get('/p/pembentukan','HomeController@pembentukan')->name('p.pembentukan');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
	Route::get('/','AdminController@index')->name('admin.index');
	Route::get('/daftar','AdminController@daftar')->name('admin.daftar');
	Route::get('/laporan','AdminController@laporan')->name('admin.laporan');

});
Route::resource('pendaftaran', 'PendaftaranController');
Route::resource('kantor_cabang', 'Kantor_cabangController');
Route::resource('user', 'UserController');
Route::resource('role', 'RoleController');
Route::resource('jenis_pekerjaan', 'Jenis_pekerjaanController');
Route::resource('program', 'ProgramController');
Route::resource('pembentukan', 'PembentukanController');
Route::resource('detail_pembentukan', 'Detail_pembentukanController');