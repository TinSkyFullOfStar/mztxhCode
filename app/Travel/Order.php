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
        return $this->hasOne('App\Travel\Price');
    }

    public function car(){
        return $this->hasOne('App\Travel\CarStatus');
    }

    public function customer(){
        return $this->belongsTo('App\Customer');
    }

}