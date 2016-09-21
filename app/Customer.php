<?php
/**
 * Created by PhpStorm.
 * User: TinSky
 * Date: 2016/7/26
 * Time: 15:43
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'tel', 'username',
    ];

    public function car(){
        return $this->hasOne('App\Travel\CarStatus');
    }

    public function order(){
        return $this->hasOne('App\Travel\Order');
    }
}