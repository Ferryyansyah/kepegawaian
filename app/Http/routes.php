<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', 'WelcomeController@index');

// Route::get('home', 'HomeController@index');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);

Route::get('/',['as'=>'home','uses'=>'WelcomeController@index']);
Route::get('jabatan/delete/{id}','CrudController@destroy');
Route::get('lokasikerja/delete/{id}','CrudController@lokasikerjadelete');
Route::get('unitkerja/delete/{id}','CrudController@unitkerjadelete');
Route::get('level/delete/{id}','CrudController@leveldelete');
Route::get('profilpegawai/delete/{id}','CrudController@profilpegawaidelete');

Route::get('updatepp/edit/{id}','CrudController@editpp');	

Route::get('/dash-board',['as'=>'dash-board','uses'=>"DashBoardController@index"]);

Route::get('keluarga',['as'=>'home','uses'=>'WelcomeController@keluargalist']);
Route::get('profilpegawai',['as'=>'home','uses'=>'WelcomeController@profil']);
Route::get('profilpegawai/detail/{id}',['as'=>'home','uses'=>'WelcomeController@profildetail']);
Route::get('/mutasi',['as'=>'mutasi','uses'=>"WelcomeController@mutasi"]);
Route::get('/level',['as'=>'level','uses'=>"WelcomeController@level"]);
Route::get('jabatan',['as'=>'jabatan','uses'=>'WelcomeController@jabatan']);
Route::get('lokasikerja',['as'=>'lokasikerja','uses'=>'WelcomeController@lokasikerja']);
Route::get('/tambahpegawai',['as'=>'tambahpegawai','uses'=>"WelcomeController@tambahpegawai"]);
Route::get('/tambahjabatan',['as'=>'tambahjabatan','uses'=>"WelcomeController@tambahjabatan"]);
Route::get('/tambahlokasikerja',['as'=>'tambahlokasikerja','uses'=>"WelcomeController@tambahlokasikerja"]);
Route::get('/unitkerja',['as'=>'unitkerja','uses'=>"WelcomeController@unitkerja"]);
Route::get('/tambahunitkerja',['as'=>'tambahunitkerja','uses'=>"WelcomeController@tambahunitkerja"]);
Route::get('/tambahlevel',['as'=>'tambahlevel','uses'=>"WelcomeController@tambahlevel"]);


Route::get('edprof/{id}','CrudController@editprof');
Route::get('edjab/{id}','CrudController@editjab');
Route::get('edlokasi/{id}','CrudController@editlokasi');
Route::get('edunit/{id}','CrudController@editunit');
Route::get('edlevel/{id}','CrudController@editlevel');
Route::get('detprofil/{id}','CrudController@detprofil');

Route::post('/updatepp/edit/{id}','CrudController@updatep');
Route::post('/tambahunitkerja',['as'=>'postkerja','uses'=>"WelcomeController@postkerja"]);
Route::post('inputjob','CrudController@create');
Route::post('inputlok','CrudController@show');
Route::post('inputuni','CrudController@store');
Route::post('inputlev','CrudController@stores');
Route::post('inputpro','CrudController@storess');


Route::post('edprof/{id}','CrudController@updateprof');
Route::post('edjab/{id}','CrudController@updatejab');
Route::post('edlokasi/{id}','CrudController@updatelok');
Route::post('edunit/{id}','CrudController@updateunit');
Route::post('edlevel/{id}','CrudController@updatelevel');

Route::controller('/','Auth\AuthController');