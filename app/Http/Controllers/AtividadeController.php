<?php

namespace App\Http\Controllers;

use App\Atividade;
use App\ResultAtividade;
use Illuminate\Http\Request;

class AtividadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $dependente = \App\Dependente::findOrFail($id);
        return view('atividades.index',compact('dependente'));
    }


    public function dep_atividade($id, $id_atvd)
    {
        $dependente = \App\Dependente::findOrFail($id);
        $palavra =  \App\Palavra::all();

        $result = new \App\ResultAtividade;
        $result -> atividade_id = $id_atvd;
        $result -> dependente_id = $id;
        $result -> acertos = 0;
        $result -> erros = 0;
        $result -> status = 'iniciado';
        $result -> save();

        switch ($id_atvd ) {
            case 1:
                return view('atividades.iniciais', compact('dependente', 'palavra'));
                break;
            default:  echo 'Atividade não encontrada';
        }
    }

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function show(Atividade $atividade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function edit(Atividade $atividade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Atividade $atividade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atividade $atividade)
    {
        //
    }
}
