<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table="areas";
    protected $fillable=['country_id','state_id','district_id','area'];
}
