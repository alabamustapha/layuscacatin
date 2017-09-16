<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['fullname','user_id', 'email', 'phone', 'company', 'country', 'state', 'city', 'street', 'payment_method'];


    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function cartItems(){
    	
    	return $this->hasMany('App\ShoppingCart');
    }
}
