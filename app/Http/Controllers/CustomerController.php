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

    	$order = \DB::table('orders')->where('email', $id)->first();
        // $carts = ShoppingCart::with('items')->where('identifier', '=', $id)->get()->toArray();
    	$cart = \DB::table('shoppingcart')->where('identifier', '=', $id)->get()->toJson();

        $cart = json_decode($cart);

    	return view('customers.order-details')->with('cart', $cart)->with('order',$order);
    }
}
