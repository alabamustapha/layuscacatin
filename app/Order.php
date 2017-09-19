<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Order extends Model
{

	protected $dates = ['transaction_date'];
	
    protected $fillable = ['fullname', 'email', 'phone', 'company', 'country', 'state', 'city', 'street', 'payment_method'];


    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function cartItems(){
    	
    	return $this->hasMany('App\ShoppingCart');
    }


    public function setTransactionDateAtrribute($date){

        $this->attributes['transaction_date'] = Carbon::parse($date);
    }
}
