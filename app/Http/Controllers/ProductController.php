<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listar(){
        $products = Product::all();
        return view('ajax.index')->with('products',$products);
    }

    public function store(Request $request){
        $product = Product::create($request->input());
        return response()->json($product);
    }

    public function show($product_id){
        $product = Product::find($product_id);
        return response()->json($product);
    }


    public function update(Request $request,$product_id){
        $product = Product::find($product_id);
        $product->name = $request->name;
        $product->details = $request->details;
        $product->save();
        return response()->json($product);
    }

    public function destroy($product_id){
        $product = Product::destroy($product_id);
        return response()->json($product);
    }

}
