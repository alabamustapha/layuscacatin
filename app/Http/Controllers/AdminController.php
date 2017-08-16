<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Distributor;
use App\Product;

class AdminController extends Controller
{
    public function dashboard(){

    	return view('admin.dashboard');
    }

    public function showDistributors(){
    	$distributors = Distributor::paginate(15);
    	return view("admin.distributors", compact('distributors'));
    }

    public function showProducts(){

    	$products = Product::paginate(10);
    	return view("admin.products", compact("products"));
    }
}
