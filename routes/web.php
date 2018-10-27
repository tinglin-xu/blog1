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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'Home\IndexController@index');

Route::group(['middleware' => ['web'], 'prefix'=>'home', 'namespace'=>'Home'], function () {

    //首页
    Route::get('index', 'IndexController@index');
});
