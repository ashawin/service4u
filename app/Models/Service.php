<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table="services";
    protected $fillable=['area','price','product_id','desc','type','currency','is_price_show','area_id','category_id','subcategory_id','country_id','state_id','district_id'];
}
