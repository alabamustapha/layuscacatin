<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Distributor;
use App\Http\Requests;
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

	public function create(Requests\storeNewDistributorRequest $request){
		
		$distributor = Distributor::create($request->all());

		return back()->with('message', $distributor->name . ' addedd successfully');
	}

	public function update(){

		dd($request);
	}

	public function delete(Requests\deleteDistributorRequest $request, $id){
		$distributor = Distributor::find($id)->delete();
		return back()->with('message', "Record removed");
	}
}
