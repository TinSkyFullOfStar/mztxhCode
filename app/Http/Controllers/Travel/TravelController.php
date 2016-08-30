<?php
/**
 * Created by PhpStorm.
 * User: TinSky
 * Date: 2016/8/6
 * Time: 21:14
 */

namespace App\Http\Controllers\Travel;


use App\Http\Controllers\Controller;
use App\Travel\CarStatus;
use App\Travel\Order;
use App\Travel\Price;
use App\User;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function index(Request $request)
    {
        $this->validate($request,[
            'price'=>'required',
            'checkCode'=>'required',
            'down_place'=>'required',
            'count'=>'required',
            'tel'=>'required',
            'username' => 'username',
        ]);


        $authCode=strtoupper($request->session()->get('authCode'));
        $checkCode=strtoupper($request->checkCode);
        if ($authCode!=$checkCode)
            return 'false';

        $order = new Order();
        $order->up_place = $request->session()->get('detail_place');
        $order->donw_place = $request->detail_end;
        $order->count=$request->count;

        $order->price = $request->price;
        $price = Price::where(['down_place'=>$order->down_place]);
        $order->pre_price=$price->pre_price;


        $tel = $request->tel;
        $username = $request->username;

        if ($request->session()->get('start')!==0){
            $tmp = $order->up_place;
            $order->up_place=$order->down_place;
            $order->down_place=$tmp;
        }

        if(empty(User::where('tel',$tel))){
            $user=new User();
            $user->username=$username;
            $user->tel=$tel;
            $user->save();
            $order->user_id=$user->id;
        }else
            $order->user_id=$request->session()->get('user_id');

        $order->car_id=$request->session()->get('car_id');
        $order->status=0;
        $order->save();

        return 'true';
    }
    
    public function getCar(Request $request)
    {
        if ($request->method() == 'GET') {
            //$departrues = CarStatus()::lists('departure');
            return view('travel.getCar');
        } else {
            $time = $request->time;
            $place = $request->start;
            $car = CarStatus::where(['departure' => $time, 'place' => start]);
            $place = Price::lists('place');
            session(['detail_place' => $car->detail_place]);
            session('start', $request->strart);
            session('car_id',$car->id);
            return view('travel.order', ['detail_place' => $car->detail_place, 'place' => $place]);
        }
    }
    
}