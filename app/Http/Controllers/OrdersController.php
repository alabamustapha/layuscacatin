<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\User;

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


    	if(\Auth::user()) {


	    	$user = User::find(\Auth::id());

	    	$user->phone = $request->input('phone');
	    	$user->company = $request->input('company');
	    	$user->country = $request->input('country');
	    	$user->state = $request->input('state');
	    	$user->city = $request->input('city');
	    	$user->street = $request->input('street');
	    	$user->save();
    	}else{

        	// \Auth::user()->orders()->create($request->all());
            $order = new Order;
            
        }


 

    	// \Cart::store(\Auth::id());
    	
    	// \Cart::destroy();

    	if($request->input('payment_method') == 'webpay'){

            $formData = $request->all();

            return view('pay', compact('formData'));

            // return redirect()->route('make_payment')->withEmail($request->input('email'));
    	 }
    	 // else {
    	// 	//if user is a guest

    	// 	//1. send them an email in acknowledgment of recieved order

    	// 	//else if user is a member

    	// 	// redirect to their account page
    	// }

    }

    // public function payment(){

    //     return view('pay');
    // }

}
