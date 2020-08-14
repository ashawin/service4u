<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
	protected $table='banners';
	protected $fillale=['slug','image','category_id','service_id'];
    //
}
