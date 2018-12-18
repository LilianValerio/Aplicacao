<?php

namespace App\Http\Controllers;

use App\ResultAtividade;
use App\Dependente;
use Illuminate\Http\Request;

class resultAtividadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $dependente = \App\Dependente::find($id);
        $resultAtividade = $dependente->resultAtividades;

        return view('dependente.listaresultados',compact('resultAtividade'));

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
    public function store(Request $request)
    {

    }

    public function insert($atividade_id, $dependente_id ){

        $result = new \App\ResultAtividade;
        $result -> atividade_id = $atividade_id;
        $result -> dependente_id = $dependente_id;
        $result -> acertos = 0;
        $result -> erros = 0;
        $result -> status = 'iniciado';
        $result -> save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ResultAtividade  $resultAtividade
     * @return \Illuminate\Http\Response
     */
    public function show(ResultAtividade $resultAtividade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ResultAtividade  $resultAtividade
     * @return \Illuminate\Http\Response
     */
    public function edit(ResultAtividade $resultAtividade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ResultAtividade  $resultAtividade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $id_dep)
    {
        $result = \App\ResultAtividade::findOrFail($id);
        $result -> acertos = $request->get('acertos');
        $result -> erros = $request->get('erros');
        $result -> status = $request->get('status');
        $result -> save();

        return redirect()->route('atividades', ['id'=> $id_dep]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ResultAtividade  $resultAtividade
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResultAtividade $resultAtividade)
    {
        //
    }
}
