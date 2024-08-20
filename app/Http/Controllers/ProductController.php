<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = product::all();
        return view('products',['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $products = product::all();
        return view('products',['create' => true, 'products' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'desc'=> 'required'
        ]);
        product::create($request->all());
        return redirect('/p');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
        return view('product',['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
        return view("product", ['edit' => true, 'product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        //
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'desc'=> 'required'
        ]);
        $product->update($request->all());
        return view('product',['product' => $product]);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
        $product->delete();
        return redirect('/p');
    }
}
