<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    protected $table = "shoppingcart";


    public function order(){
    	
    	return $this->belongsTo('App\Order');
    }
}
