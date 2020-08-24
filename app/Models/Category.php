<?php

namespace App\Models;
use App\Models\SubCategory;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="categories";
    protected $fillable=['category','slug'];

     public function subcategories(){
        return $this->hasMany(SubCategory::class, 'category_id', 'id');
    }


    public function products(){
    	return $this->hasMany(Service::class, 'category_id', 'id');
    }

    public function searchproducts()
	{
	    return $this->hasManyThrough(Service::class, self::class, 'id', 'category_id');
	}
}
