<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function store(Request $request){

    	$rules = [
    		'fullname'		=>	'required|string',
    		'email'			=>	'required|string',
    		'phone'			=>	'required',
    		'company'		=>	'string',
    		'country'		=>	'required|string',
    		'state'			=>	'required|string',
    		'city'			=>	'required|string',
    		'street'		=>	'required|string'
    	];

    	$this->validate($request, $rules);

    	if($request->input('payment_method') == 'webpay'){
    		return redirect('https://paystack.com');
    	}


    }
}
