<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        return view('products.list', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product;
        return view('products.add', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $fields=$request->validated();

        $filenameWithExt = $request->file('name')->getClientOriginalName();

        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        $extension = $request->file('name')->getClientOriginalExtension();

        $fileNameToStore = $filename.'_'.time().'.'.$extension;

        $path = $request->file('name')->storeAs('public/catalogo', $fileNameToStore);

        //Create Post
        $product = new Product;
        $product->fill($fields);
        $product->name=$fileNameToStore;
        $product->save();
        return redirect()->route('products.index')->with('success', 'Ficheiro inserido com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $fields=$request->validated();

        if($request->hasFile('name')){
            $filenameWithExt = $request->file('name')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('name')->getClientOriginalExtension();

            $fileNameToStore = $filename.''.time().'.'.$extension;

            $path = $request->file('name')->storeAs('public/catalogo', $fileNameToStore);

            Storage::delete('public/catalogo/'.$product->name);
        }



        $product->fill($fields);
        if($request->hasFile('name')){
            $product->name = $fileNameToStore;
        }


        $product->save();
        return redirect()->route('products.index')->with('success', 'Catálogo alterada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Storage::delete('public/catalogo/'.$product->name); //public para eliminar
        $product->delete();
        return redirect('products')->with('success','Catálogo removido');
    }
    public function listProduct(){ 
        $products=Product::all();
        return view('product', compact("products"));
    }
}
