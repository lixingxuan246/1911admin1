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
//
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/ok','Admin\AdminController@ok');
                                                    Route::get('/admin/index','Admin\AdminController@index');
Route::get('/admin/tianjia','Admin\AdminController@tianjia');
#管理员展示
Route::get('/admin/zhan','Admin\AdminController@zhan');
Route::get('/admin/login','User\UserController@login');
Route::get('/admin/create','News\NewsController@create');
Route::get('/admin/lists','News\NewsController@lists');
Route::post('/admin/admin/login','Admin\AdminController@login');
#管理员登录
Route::get('/admin/admin/create','Admin\AdminController@create');
#管理员添加
Route::post('admin/createadmin','Admin\AdminController@createadmin');













