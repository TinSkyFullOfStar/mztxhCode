<?php
/**
 * Created by PhpStorm.
 * User: TinSky
 * Date: 2016/7/26
 * Time: 18:32
 */

namespace App\Http\Controllers;


use App\Travel\CarStatus;
use App\Travel\Price;
use App\Utils\CheckCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class TestController extends Controller
{
    public function index(Request $request)
    {
        $checkCode = new CheckCode();
        $checkCode->createCheckCode();
        $checkCode->setSession($request);
    }


    public function addCar(Request $request)
    {
        $this->validate($request, [
            'time' => 'required|date_format:Y:m:d:H:i:s',
            'de_place' => 'required',
            'car_count' => 'required',
        ]);

        $car = new CarStatus();
        $car->user_id = $request->user()->id;
        $car->departure = $request->time;
        $car->detail_place = $request->de_place;
        $car->car_count = $request->car_count;
        //$car->save();
        return view('success');
    }


    public function addPrice(Request $request)
    {
        $this->validate($request, [
            'place' => 'required',
            'price' => 'required|numeric',
            'price' => 'required|numeric',
        ]);

        if ($request->price > $request->pre_price) {
            $price = new Price();
            $price->place = $request->place;
            $price->price = $request->price;
            $price->pre_price = $request->pre_price;
            //$price->save();
            return view('success');
        }

        return Redirect::to('./addPrice');
    }


    public function pay(){
        return 'hello world';
    }














}