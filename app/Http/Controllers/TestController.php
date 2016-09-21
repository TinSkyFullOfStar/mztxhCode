<?php
/**
 * Created by PhpStorm.
 * User: TinSky
 * Date: 2016/7/26
 * Time: 18:32
 */

namespace App\Http\Controllers;


use App\Travel\CarStatus;
use App\Travel\Order;
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
            'time' => 'required|date_format:Y-m-d H:i:s',
            'car_count' => 'required',
            'place' => 'required',
        ]);

        $car = new CarStatus();
        $car->user_id = $request->user()->id;
        $car->departure = $request->time;
        $car->car_count = $request->car_count;
        $car->up = $request->place;
        $car->save();
        return view('success');
    }


    public function addPrice(Request $request)
    {
        $this->validate($request, [
            'place' => 'required',
            'price' => 'required|numeric',
            'pre_price' => 'required|numeric',
        ]);

        if ($request->price > $request->pre_price) {
            $price = new Price();
            $price->place = $request->place;
            $price->price = $request->price;
            $price->pre_price = $request->pre_price;
            $price->save();
            return view('success');
        }

        return Redirect::to('./addPrice');
    }


    public function getOrders(){
        $views = '';
        $orders = Order::all();

        foreach ($orders as $order){
            $customer = $order->customer;
            $views .= view('manage.item',['order' => $order , 'customer' => $customer])->__toString();
        }

        return view('manage.checkPay',['list' => $views]);
    }


    public function updateOrders(){
        unset($_POST['_token']);
        foreach ($_POST as $val)
            \App\Travel\Order::where('id',$val)->update(['status' => 1]);
        return 'true';
    }

}