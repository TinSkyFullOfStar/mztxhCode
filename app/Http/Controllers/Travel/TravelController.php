<?php
/**
 * Created by PhpStorm.
 * User: TinSky
 * Date: 2016/8/6
 * Time: 21:14
 */

namespace App\Http\Controllers\Travel;


use App\Customer;
use App\Http\Controllers\Controller;
use App\Travel\CarStatus;
use App\Travel\Order;
use App\Travel\Price;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class TravelController extends Controller
{


    public function order(Request $request)
    {
        $this->validate($request,[
            'price'=>'required',
            'checkCode'=>'required',
            'count'=>'required',
            'tel'=>'required',
            'username' => 'required',
        ]);


        $tel = $request->tel;
        $username = $request->username;
        $customer = Customer::where('tel',$tel)->get();


        if($customer->isEmpty()){
            $customer = Customer::create([
                'username' => $username,
                'tel' => $tel,
            ]);

            $customer = $customer->id;
        }else
            $customer = $customer[0]->id;

        if (!is_null(\App\Customer::where('tel',$tel)->get()[0]->order))
            return '你已经预订过了!!!';

        $authCode = strtoupper($request->session()->get('authCode'));
        $checkCode = strtoupper($request->checkCode);
        if ($authCode!=$checkCode)
            return 'false';

        $start = $request->session()->get('start');

        $order = new Order();
        $order->up_place = $request->session()->get('up_detail');
        $order->down_place = $request->session()->get('down_detail');
        $order->count = $request->count;
        $order->pay = $request->price;
        $order->customer_id = $customer;

        if (preg_match('/.*华.*/',$order->up_place))
            $price = Price::where(['place' => $order->down_place])->get();
        else
            $price = Price::where(['place' => $order->up_place])->get();

        $order->pre_pay=$price[0]->pre_price;


        if ($request->session()->get('start')!==0){
            $tmp = $order->up_place;
            $order->up_place = $order->down_place;
            $order->down_place = $tmp;
        }


        $order->car_id = $request->session()->get('car_id');
        $order->status = 0;
        $order->save();

        return 'true';

    }



    public function getCar(Request $request)
    {
        if ($request->method() == 'GET') {
            $departrues = CarStatus::lists('departure');
            return view('travel.getCar',['departures' => $departrues]);
        } else {
            $tel = '';
            $name = '';

            if (!empty($request->cookie('tel'))){
                $tel = $request->cookie('tel');
                $name = $request->cookie('name');
            }else{
                return view('travel.register');
            }

            $time = $request->session()->get('time');
            $start = $request->session()->get('start');
            $end = $request->session()->get('end');

            $car = CarStatus::where(['departure' => $time, 'up' => $start])->get();
            $place = Price::where('id',$request->getoff)->get();


            if (count($car)==0)
                return '没有此路线的车辆可预订';

            $request->session()->put('car_id',$car[0]->id);

            if ($start=='华广'){
                $goton = '华南理工大学广州学院';
                $gotoff = $place[0]->place;
            }else{
                $goton = $place[0]->place;
                $gotoff = '华南理工大学广州学院';
            }

            $request->session()->put('up_detail',$goton);
            $request->session()->put('down_detail',$gotoff);

            return view('travel.order', [
                'goton' => $goton,
                'gotoff' => $gotoff,
                'price' => $place[0]->price,
                'start' => $start,
                'end' => $end,
                'tel' => $tel,
                'name' => $name,
                'day' => date('w',strtotime($time)),
                'date' => date('y-m-d',strtotime($time)),
                'time' => date('h:i',strtotime($time)),
            ]);
        }
    }



    public function getPlace($data,Request $request){
        $list = ['',''];
        $data = json_decode($data,true);

        if ($data['start']=='华广')
            $up['start'] = 0;
        else
            $up['start'] = 1;

        $request->session()->put('time',$data['date']);
        $request->session()->put('start',$data['start']);
        $request->session()->put('end',$data['end']);

        $places = DB::table('prices')->select(['place','id'])->get();

        foreach ($places as $val)
            $list[0] .= view('travel.item1',[
                    'place' => $val->place,
                    'id' => $val->id ,
                    'data' => $data['start'],
            ])->__toString();

        $list[1] = view('travel.item2',['data' => $up['start']]);

        //up参数用来判断上车地点
        return view('travel.getPlace',[
            'up' => $up['start'],
            'list' => $list,
            'start' => $data['start'],
            'end' => $data['end'],
        ]);

    }


    public function register(Request $request,Response $response)
    {
        if (isset($_SESSION['randCode'])){
            echo 'false';
            return false;
        }


        $randCode = $request->getSession()->get('randCode');
        $smsCode = $request->smsCode;

        if ($randCode == $smsCode) {
            $customer = Customer::create ([
                'tel' => $request->tel ,
                'username' => $request->username ,
            ]);

            if ( $customer instanceof Customer ) {
                $response->withCookie (cookie ()->forever ('tel' , $customer->tel));
                $response->withCookie (cookie ()->forever ('name' , $customer->username));
                $response->setContent('<a href="/mztxhCode/public/getCar">预约包车</a>');
                return $response;
            } else
                return false;
        }

        return 'false';
    }


    public function sendSmsCheckCode(Request $request,Response $response){

        $customer = Customer::where('tel',$request->tel)->get();

        if (!$customer->isEmpty()&&!preg_match('/^1[34578]\d{9}/',$request->tel)){
            $response->withCookie (cookie ()->forever ('tel' , $customer->tel));
            $response->withCookie (cookie ()->forever ('name' , $customer->username));
            echo '发送失败,你已经注册或者手机号错误!!!';
            return $response;
        }

        $code='';
        $alidayu = app('alidayu');

        for ($i=0;$i<6;$i++)
            $code.=(int)rand(0,9);

        $alidayu->setSmsParam(['code'=>$code]).
        $result = $alidayu->sendCheckCodeSms($request->tel);

        if (!$result){
            return 'sorry,please wait a moment and then try it again!!!';
        }else{
            $request->session()->put('randCode',$code);
            return 'success';
        }
    }

}