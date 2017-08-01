<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Distributor;

class DistributorController extends Controller
{
    /**
     * Show the distributors table on page.
     *
     * @return \Illuminate\Http\Response
     */

	public function index(){

		$distributors = Distributor::paginate(15);
		return view('distributors.index', compact("distributors"));
	}
}
