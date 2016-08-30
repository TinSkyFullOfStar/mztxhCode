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

Route::post('test',function(){
   var_dump($_POST);
});

Route::get('getPlace',function(){
   return view("travel.getPlace");
});

Route::match(['post','get'],'getCar','Travel\TravelController@getCar');


Route::any('wechat', 'WeChatController@serve');


Route::post('orderPost','Travel\TravelController@index');


Route::get('checkcode', 'TestController@index');

Route::get('foo/{data}',function($data){
    $data=json_decode($data);
    var_dump($data);
});


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