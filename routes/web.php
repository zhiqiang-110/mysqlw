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
//获取参数
Route::resource('/req', 'Admin\ReqController');

//单文件上传
Route::resource('/file', 'Admin\FileController');

//多文件上传s
Route::resource('/files', 'Admin\FilesController');

//cookie练习
Route::resource('/cookie', 'Admin\CookiesController');

//session练习
Route::resource('/session', 'Admin\SessionsController');

//响应操作
Route::resource('/res', 'Admin\ResController');


//视图
Route::resource('/vie', 'Admin\VieController');

//视图
Route::resource('/inde', 'Admin\IndexController');

//数据库操作
Route::resource('/db', 'Admin\DbController');

//后台
Route::resource('/admin', 'Admin\AdminController');

//后台用户模块
Route::resource('/users', 'Admin\UsersController');

//模型开发
Route::resource('/user', 'Admin\UserController');

Route::get('/address/{id}', 'Admin\UserController@address');