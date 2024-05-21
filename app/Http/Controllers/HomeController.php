<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage(){
        $products = Product::all()->toArray() ;

        $reports = Product::select('productType', 'quantity', 'note')->get();
        return view('welcome', compact("products", "reports"));
    }
    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createProduct(Request $request){
        $request->validate([
            'productType' => 'required|alpha|size:3',
            'productCode' => 'required|alpha_num|size:6|unique:products,productCode',
            'productName' => 'required|string|max:50',
            'quantity' => 'required|numeric',
            'note' => 'nullable|string|max:60',
        ]);

        Product::create([
            'productType' => $request->input('productType'),
            'productCode' => $request->input('productCode'),
            'productName' => $request->input('productName'),
            'quantity' => $request->input('quantity'),
            'note' => $request->input('note'),
        ]);
        return redirect()->route('welcome') ;
    }
}
