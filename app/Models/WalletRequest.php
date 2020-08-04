<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WalletRequest extends Model
{
    protected $table='wallet_requests';
    protected $fillable=['balance_type','holder_id','slug','balance','desc','images','status'];
}
