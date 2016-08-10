<?php
/**
 * Created by PhpStorm.
 * User: TinSky
 * Date: 2016/7/26
 * Time: 15:41
 */

namespace App\Travel;


use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function price(){
        return $this->belongsTo('App\Travel\Price');
    }

    public function car(){
        return $this->belongsTo('App\Travel\CarStatus');
    }

}