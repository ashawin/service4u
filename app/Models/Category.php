<?php

namespace App\Models;
use App\Models\SubCategory;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="categories";
    protected $fillable=['category'];

     public function subcategories(){
        return $this->hasMany(SubCategory::class, 'category_id', 'id');
    }
}
