<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    protected $table = "shoppingcart";


    public function items(){
    	
    	return $this->belongsTo('App\Order');
    }
}
