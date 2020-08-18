<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Bavix\Wallet\Traits\HasWallet;
use Bavix\Wallet\Interfaces\Wallet;
use Rinvex\Subscriptions\Traits\HasSubscriptions;

class User extends Authenticatable implements Wallet
{
    use Notifiable, HasWallet, HasSubscriptions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role','mobile'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public  function isAdmin(){
         if($this->role === 1)
            { 
                return true; 
            } 
            else 
            { 
                return false; 
            }
    }


    public function isVendor(){
            if($this->role === 2)
            { 
                return true; 
            } 
            else 
            { 
                return false; 
            }
    }
}
