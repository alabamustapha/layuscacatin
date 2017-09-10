<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    public function show(){

    	return view('cart');
    }


    public function checkout(Product $product){
    	return view('checkout');
    }


    public function removeItemFromCart($rowId){


        \Cart::remove($rowId);

        return back()->withMessage('Item removed from cart Successfully');
    }

    


}
