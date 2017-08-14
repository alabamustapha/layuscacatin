<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Distributor;

class AdminController extends Controller
{
    public function dashboard(){

    	return view('admin.dashboard');
    }

    public function showDistributors(){
    	$distributors = Distributor::paginate(15);
    	return view("admin.distributors", compact('distributors'));
    }
}
