<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
     protected $table="sub_categories";
    protected $fillable=['category_id','subcategory','slug'];
    
     public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
