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
                                                    Route::get('/admin/index','Admin\AdminController@index');
Route::get('/admin/tianjia','Admin\AdminController@tianjia');
Route::get('/admin/zhan','Admin\AdminController@zhan');
Route::get('/admin/login','User\UserController@login');
Route::get('/admin/create','News\NewsController@create');
Route::get('/admin/lists','News\NewsController@lists');


Route::any('/role/add','Admin\RoleController@add'); //角色添加
Route::any('/role/store','Admin\RoleController@store');
Route::any('/role/index','Admin\RoleController@index'); //角色展示
Route::any('/role/detal/{role_id}','Admin\RoleController@detal'); //角色删除
Route::any('/role/edit/{role_id}','Admin\RoleController@edit'); //角色修改
Route::any('/role/update/{role_id}','Admin\RoleController@update'); //角色修改