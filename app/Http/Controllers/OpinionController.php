<?php

namespace App\Http\Controllers;

use App\Opinion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreOpinionRequest;
use Illuminate\Support\Facades\Storage;


class OpinionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $opinions=Opinion::all();
      return view('opinions.list', compact('opinions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $opinion = new Opinion;
      return view('opinion',compact("opinion"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $opinion = new Opinion;
      $opinion->fill($request->all());
      $opinion->save();

      return redirect()->route('gm.opinions')->with('success', 'Opinião inserida com sucesso');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Opinion  $opinion
     * @return \Illuminate\Http\Response
     */
    public function show(Opinion $opinion)
    {

        return view('opinions.show',compact('opinion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Opinion  $opinion
     * @return \Illuminate\Http\Response
     */
    public function edit(Opinion $opinion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Opinion  $opinion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Opinion $opinion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Opinion  $opinion
     * @return \Illuminate\Http\Response
     */

    public function opinions()
    {
     $opinions = Opinion::orderBy("created_at")->paginate('4');
     return view('opinion',compact('opinions'));
    }

    public function destroy(Opinion $opinion)//caso haja problemas por id
    {
        $opinion->delete();
        return redirect()->route('opinions.index')->with('success', 'Opinião eliminada com sucesso');
    }

}
