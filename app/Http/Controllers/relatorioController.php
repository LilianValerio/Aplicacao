<?php

namespace App\Http\Controllers;
use App\User;
use App\ResultAtividade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class relatorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
    return view('home');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dependente =  \App\Dependente::find($id);

        $idDependente = $dependente['id'];
        $name = $dependente['name'];
        $result = \App\ResultAtividade::where('dependente_id', $idDependente)->get()->first();

        $atividadeID =   $result -> atividade_id;
        $acertos1 = 1;
        $erros1 = 1;
        $acertos2 = 1;
        $erros2 = 1;
        $acertos3 = 1;
        $erros3 = 1;

        if($atividadeID == 1){
            $acertos1 = $result -> acertos;
            $erros1 = $result -> erros;
        }

        if($atividadeID == 2){
            $acertos2 = $result -> acertos;
            $erros2 = $result -> erros;
        }

        if($atividadeID == 3){
            $acertos3 = $result -> acertos;
            $erros3 = $result -> erros;
        }

    return view('relatorios.home_relatorio',compact('acertos1', 'erros1','acertos2', 
    'erros2','acertos3', 'erros3' , 'name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
