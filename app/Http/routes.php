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

Route::get('/', function () {
    return view('welcome');
});


Route::any('wechat','WeChatController@serve');


Route::get('foo',function(){
	return 'hello world';
});

Route::auth();

Route::get('/home', 'HomeController@index');
