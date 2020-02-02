<?php

namespace App\Http\Controllers;

use App\Galery;
use Illuminate\Http\Request;
use App\Http\Requests\StoreGaleryRequest;
use App\Http\Requests\UpdateGaleryRequest;
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

        $filenameWithExt = $request->file('title')->getClientOriginalName();

        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        $extension = $request->file('title')->getClientOriginalExtension();

        $fileNameToStore = $filename.'_'.time().'.'.$extension;

        $path = $request->file('title')->storeAs('public/galeria', $fileNameToStore);

        //Create Galery
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
        return view('galerys.show',compact('galery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function edit(Galery $galery)
    {
        return view('galerys.edit', compact('galery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGaleryRequest $request, Galery $galery)
    {
        $fields=$request->validated();

        if($request->hasFile('title')){
            $filenameWithExt = $request->file('title')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('title')->getClientOriginalExtension();

            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            $path = $request->file('title')->storeAs('public/galeria', $fileNameToStore);
            
            Storage::delete('public/galeria/'.$galery->title);
        }
        

        //Create Galery
        $galery->fill($fields);
        if($request->hasFile('title')){
            $galery->title = $fileNameToStore;            
        }
        $galery->save();

        return redirect()->route('galerys.index')->with('success', 'Imagem alterada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galery $galery)
    {        
        Storage::delete('public/galeria/'.$galery->title);
        $galery->delete();
        return redirect()->route('galerys.index')->with('success', 'Imagem eliminada com sucesso!');
    }

    public function mostrarimagens (Galery $galery)
    {
        $galerys=Galery::all();
        return view('galery', compact('galerys'));
    }
}
