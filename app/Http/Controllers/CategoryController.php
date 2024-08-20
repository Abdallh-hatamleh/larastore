<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = category::all();
        return view('categories',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = category::all();
        return view('categories',['create' => true, 'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'desc'=> 'required'
        ]);
        category::create($request->all());
        return redirect('/c');
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
        return view('category',['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        //
        return view("category", ['edit' => true, 'category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        //
        $request->validate([
            'name' => 'required',
            'desc'=> 'required'
        ]);
        $category->update($request->all());
        return view('category',['category' => $category]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        //
        $category->delete();
        return redirect('/c');
    }
}
