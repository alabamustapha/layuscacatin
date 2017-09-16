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

        flash('Cart Updated Successfully')->success();

        return back();
    }


    public function removeItemFromCart($rowId){
        
        \Cart::remove($rowId);

        flash('Item Removed From Cart Successfully')->overlay();
        return back();
    }

    


}
