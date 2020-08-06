<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\SubCategory;
class Product extends Model
{
    protected $table="products";
    protected $fillable=['category_id','subcategory_id','product','desc','images','slug'];

    public function subproducts()
	{
	    return $this->hasManyThrough(Product::class, self::class, 'parent_id', 'category_id');
	}

	   public function Category(){
    	return $this->hasMany(Category::class,'id','category_id');
    }

    public function SubCategory(){
    	return $this->hasMany(SubCategory::class,'id','subcategory_id');
    }
}
