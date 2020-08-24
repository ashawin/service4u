<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table="districts";
    protected $fillable=['country_id','state_id','district','slug'];
}
