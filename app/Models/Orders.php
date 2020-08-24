<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table="orders";
   protected  $fillable=['name','email','mobile','country','state','Distrcit','address','address1','pin','service_id','payment_type','provider_id','status','type','order_id','user_id','slug'];
}
