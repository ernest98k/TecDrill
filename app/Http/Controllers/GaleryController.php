<?php

namespace App\Http\Controllers;

use App\Galery;
use Illuminate\Http\Request;
use App\Http\Requests\StoreGaleryRequest;
use Illuminate\Support\Facades\Storage;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galerys=Galery::all();
        return view('galerys.list', compact('galerys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $galery = new Galery;
        return view('galerys.add', compact('galery'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGaleryRequest $request)
    {
         
        $fields=$request->validated();

        $filenameWithExt = $request->file('image')->getClientOriginalName();

        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        $extension = $request->file('image')->getClientOriginalExtension();

        $fileNameToStore = $filename.'_'.time().'.'.$extension;

        $path = $request->file('image')->storeAs('public/galeria', $fileNameToStore);

        //Create Post
        $galery = new Galery;
        $galery->fill($fields);
        $galery->title=$fileNameToStore;
        $galery->save();
        return redirect()->route('galerys.index')->with('success', 'Imagem inserida com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function show(Galery $galery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function edit(Galery $galery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galery $galery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galery $galery)
    {
        //
    }
}
