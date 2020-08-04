<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    protected $table="service_requests";
   protected  $fillable=['service_id','desc','provider_id','slug','status'];
};
