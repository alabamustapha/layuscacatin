<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;

class ProductController extends Controller
{
    public function store(Requests\AddProductRequest $request){
    		
    	$product = Product::create([
    		'title' => $request->title,
    		'sku' => $request->sku,
    		'description' => $request->description,
    		'thumbnail' => '',
    		'price' => $request->price,
    	]);

    	if($product){

    		if ($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid()) {
				$path = $request->thumbnail->store('public/products');

				$product->thumbnail = str_replace('public/', '', $path);
				$product->save();
			}

    	}

    	return back()->with('message', "Action completed");

    }


    public function show(Product $product){
            return view('products.show', compact('product'));
    }

    public function edit(Product $product){
        return view('products.edit', compact('product'));        
    }

    public function update(Request $request, Product $product){
        
        $product->update($request->all());

        if ($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid()) {

                $path = $request->thumbnail->store('public/products');

                $product->thumbnail = str_replace('public/', '', $path);
                $product->save();
            }


        return back()->with('message', 'product updated');
    }

    public function delete(Request $request, Product $product){
        $product->delete();

        return back()->with('message', "Product deleted");
    }
}
