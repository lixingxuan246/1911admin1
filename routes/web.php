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
Route::get('/admin/index','Admin\AdminController@index');
Route::get('/admin/tianjia','Admin\AdminController@tianjia');
Route::get('/admin/zhan','Admin\AdminController@zhan');
Route::get('/admin/login','User\UserController@login');
Route::get('/admin/create','News\NewsController@create');
Route::get('/admin/lists','News\NewsController@lists');
# 权限节点添加
Route::any('/admin/powerNodeAdd' , 'Admin\PowerNodeController@powerNodeAdd' );
# 权限列表
Route::any('/admin/powerNodeList' , 'Admin\PowerNodeController@powerNodeList' );
#权限删除
Route::any('/powernode/destroy/{power_node_id}' , 'Admin\PowerNodeController@destroy' );
#权限修改
Route::any('/powernode/auth/{power_node_id}' , 'Admin\PowerNodeController@auth' );