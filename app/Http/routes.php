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

Route::get('getPlace/{data}','Travel\TravelController@getPlace');

Route::match(['post','get'],'getCar','Travel\TravelController@getCar');


Route::any('wechat', 'WeChatController@serve');


Route::post('orderPost','Travel\TravelController@order');


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

   
    Route::get('getOrder','TestController@getOrders');


    Route::post('updateOrder','TestController@updateOrders');
    
});


Route::get('test',function (){
     var_dump(\App\Travel\CarStatus::where(['departure' => '2015-06-13 00:24:09', 'up' => '华广'])->get());
});

Route::post('sendSms','Travel\TravelController@sendSmsCheckCode');

Route::post('register','Travel\TravelController@register');