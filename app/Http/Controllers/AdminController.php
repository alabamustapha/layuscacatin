<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Distributor;
use App\Product;
use App\Order;
use App\User;
use App\Transaction;

class AdminController extends Controller
{
    public function dashboard(){

        $orders = Order::all()->count();
        $distributors = Distributor::all()->count();
        $products = Product::all()->count();
        $transactions = Transaction::all()->count();
        $customers = User::where('role', '=', 'customer')->get()->count();

    	return view('admin.dashboard', compact(
            'orders', 
            'distributors',
            'customers', 
            'products',
            'transactions'

            ));
    }

    public function showDistributors(){
        $distributors = Distributor::paginate(15);
        return view("admin.distributors", compact('distributors'));
    }

    public function showTransactions(){
    	$transactions = Transaction::paginate(5);
    	return view("admin.transactions", compact('transactions'));
    }

    public function showProducts(){

    	$products = Product::paginate(10);
    	return view("admin.products", compact("products"));
    }

    public function showOrders(){

        $orders = \DB::table('orders')->orderBy('created_at', 'desc')->paginate(5);

        return view("admin.orders", compact('orders'));
    }

    public function updateOrder($id, Request $request) {        
        $order = Order::findOrFail($id);

        $order->status = $request->input('status');
        $order->save();

        flash('This Order has been Updated')->overlay();
        return back();
        

    }
}
