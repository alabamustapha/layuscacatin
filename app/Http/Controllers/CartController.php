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


    public function updateCartItem(Request $request, $rowId){

    	\Cart::update($rowId, $request->input('qty'));

        return back()->with('message','Cart Updated Successfully');
    }


    public function removeItemFromCart($rowId){
        
        \Cart::remove($rowId);

        return back()->with('warning','Item removed from cart Successfully');
    }

    


}
