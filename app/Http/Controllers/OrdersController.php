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

        //if user is a registered customer, update their information
    	if(\Auth::user()) {

	    	$user = User::find(\Auth::id());
	    	$user->phone = $request->input('phone');
	    	$user->company = $request->input('company');
	    	$user->country = $request->input('country');
	    	$user->state = $request->input('state');
	    	$user->city = $request->input('city');
	    	$user->street = $request->input('street');
	    	$user->save();

    	}  
 
        //if user wants to pay with a payment gateway
    	if($request->input('payment_method') == 'webpay'){

            $formData = $request->all();

            //link them to a payment page with some data
            return view('pay', compact('formData'));
            
    	 } else {


            //if a user wants to pay through transfer or pay-on-delivery

            //just fill the orders table with their info and continue with the processing
            $order = new Order;

            $order->create($request->all()); 

            //admin can send an email to the user who made the order to let them know their order was recieved and currently being processed and details of their order.

            \Cart::instance('cart')->store($request->input('email'));

            \Cart::destroy();


            if(\Auth::user()){

                flash('Order placed successfully, check your dashboard to follow up with your orders ')->overlay();
                return redirect('/');
            } else {
                flash("Order placed successfully. Email has been sent to the email address provided with order details. we'll get back to you when we recieved your payment. thanks")->overlay();
                return redirect('/');
            }

         }
    	 
    }

}
