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


Route::group(['prefix'=>''],function(){
	//前台首页
	Route::get('/', function () {return view('home/qiantai');});

	//后台首页
	Route::get('admin',function(){return view('admin/index/index');});
    //后台首页我的桌面
    Route::get('/welcome', function () {return view('admin/index/welcome');});
    //后台首页我的桌面
    Route::get('/zixun', function () {return view('admin/zixun/index');});
});