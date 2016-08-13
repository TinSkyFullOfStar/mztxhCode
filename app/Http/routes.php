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

Route::auth();


Route::get('order', function () {
    return view('travel.order');
});


Route::match(['post','get'],'getCar','TravelController@getCar');


Route::any('wechat', 'WeChatController@serve');


Route::post('orderPost','Travel\TravelController@index');


Route::get('checkcode', 'TestController@index');


Route::group(['middleware' => 'auth'], function () {
    
    Route::get('addCar', function () {
        return view('manage.addCar');
    });
    
    
    Route::get('addPrice', function () {
        return view('manage.price');
    });
    
    
    Route::post('car', 'TestController@addCar');
    
    
    Route::post('price', 'TestController@addPrice');

   
    Route::get('check',function(){
        return view('manage.checkPay',['path'=>'/mztxhCode/public/checkPay']);
    });

   
    Route::post('checkPay','TestController@pay');
    
});