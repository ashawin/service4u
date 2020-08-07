<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\SubCategory;

class Service extends Model
{
    protected $table="services";
    protected $fillable=['area','price','product_id','desc','type','currency','is_price_show','area_id','category_id','subcategory_id','country_id','state_id','district_id','provider_id','status'];

      public function Category(){
    	return $this->hasMany(Category::class,'id','category_id');
    }

    public function SubCategory(){
    	return $this->hasMany(SubCategory::class,'id','subcategory_id');
    }

    public function myservice(){
    	return $this->hasMany(Orders::class,'id','service_id');
    }
}
