<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\ShoppingCart;


class CustomerController extends Controller
{


	public function dashboard(){

    	return view('customers.dashboard');
    }

    public function myOrders($id) {

    	$id = \Auth::user()->email;


    	$orders = Order::with('user')->where('email', $id)->paginate(5);

    	

    	return view('customers.orders', compact('orders'));
    }

    public function orderDetails($id) {

    	$id = \Auth::user()->email;

    	// $orders = \DB::table('shoppingcart')->where('identifier', $id)->get();
    	$orders = ShoppingCart::where('identifier', '=', $id)->get();

    	return view('customers.order-details', compact('orders'));
    }
}
