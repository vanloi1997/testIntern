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

Route::group(['prefix' => 'admin'], function(){
    Route::get('/' , function(){
        return view('admin.post.index');
    });
    Route::group(['prefix' => 'post'] , function(){
        Route::get('','Admin\AdminPostController@index')->name('admin.post.index');
        Route::get('create','Admin\AdminPostController@create')->name('admin.post.create');
        Route::post('create','Admin\AdminPostController@store');
    });
});
