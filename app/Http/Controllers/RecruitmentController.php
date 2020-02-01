<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRecruitmentRequest;
use App\Recruitment;
use Illuminate\Http\Request;

class RecruitmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recruitments=Recruitment::orderBy('id', 'DESC')->get();
        return view('recruitments.list', compact('recruitments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecruitmentRequest $request)
    {
        $fields=$request->validated(); //verificar se os campos estão todos bem
        //get filename com a extensao
        $filenameWithExt=$request->file('cv')->getClientOriginalName();
        //get só o filename
        $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
        //gett só a extensao
        $extension=$request->file('cv')->getClientOriginalExtension();
        //filename para o store, fazemos a funcao time  para nao haver ficheiros repetidos
        $fileNameToStore=$filename.'_'.time().'.'.$extension;
        //upload da imagem                   e cria a pasta "cv" no public
        $path=$request->file('cv')->storeAs('public/cv', $fileNameToStore);

        $recruitment=new Recruitment();
        $recruitment->fill($fields);
        $recruitment->cv=$fileNameToStore;
        $recruitment->save();
        return redirect()->route('recruitment')->with('success', 'Formulário enviado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recruitment  $recruitment
     * @return \Illuminate\Http\Response
     */
    public function show(Recruitment $recruitment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recruitment  $recruitment
     * @return \Illuminate\Http\Response
     */
    public function edit(Recruitment $recruitment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recruitment  $recruitment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recruitment $recruitment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recruitment  $recruitment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recruitment $recruitment)
    {
        
    }
}
