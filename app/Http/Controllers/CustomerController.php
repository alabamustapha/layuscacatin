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

    	$id = \Auth::id();

    	$orders = Order::with('user')->where('user_id', $id)->paginate(5);

    	

    	return view('customers.orders', compact('orders'));
    }

    public function orderDetails($id){

    	$id = \Auth::id();

    	// $orders = \DB::table('shoppingcart')->where('identifier', $id)->get();
    	$orders = ShoppingCart::with('order')->where('identifier', '=', $id)->get();

    	return view('customers.order-details', compact('orders'));
    }
}
