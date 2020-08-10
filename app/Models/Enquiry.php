<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
  protected  $table="enquiries";
   protected $fillable=['slug','name','email','mobile','service','country','state','area'];
}
