<?php
/**
 * Created by PhpStorm.
 * User: TinSky
 * Date: 2016/7/26
 * Time: 15:44
 */

namespace App\Travel;


use Illuminate\Database\Eloquent\Model;

class CarStatus extends Model
{
    protected $fillable = [
      'up','car_count','departure','user_id'
    ];
}