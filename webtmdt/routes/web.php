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

Route::get('/vidu1','App\Http\Controllers\ViDuController@vidu1');  
Route::get('/vidu2','App\Http\Controllers\ViDuController@vidu2');
Route::post('/tinhtong','App\Http\Controllers\ViDuController@tinhtong');

Route::get('/bth1','App\Http\Controllers\BTController@bth1');
Route::get('/upper','App\Http\Controllers\BTController@upper');

Route::get('/bth2','App\Http\Controllers\BTController@bth2');
Route::get('/maxmin','App\Http\Controllers\BTController@maxmin');

Route::get('/bth3','App\Http\Controllers\BTController@bth3');
Route::get('/chanle','App\Http\Controllers\BTController@chanle');

Route::get('/bth4','App\Http\Controllers\BTController@bth4');
Route::post('/inthongtinsv','App\Http\Controllers\BTController@inthongtinsv');

Route::get("/qlsach/theloai","App\Http\Controllers\BookController@laythongtintheloai");
Route::get("/qlsach/thongtinsach","App\Http\Controllers\BookController@laythongtinsach");
Route::get("/qlsach/thongke","App\Http\Controllers\BookController@laythongke");

Route::get("/chucnang1","App\Http\Controllers\ViDuController@chucnang1");
Route::get("/chucnang2","App\Http\Controllers\ViDuController@chucnang2");
Route::get("/chucnangNgan","App\Http\Controllers\ViDuController@chucnangNgan");
