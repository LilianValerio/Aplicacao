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
        $consulta = \App\ResultAtividade::where('dependente_id', $idDependente)->get();

        $acertos1 = 0;
        $erros1 = 0;
        $acertos2 = 0;
        $erros2 = 0;
        $acertos3 = 0;
        $erros3 = 0;
        $naoexecutada1 = 0;
        $naoexecutada2 = 0;
        $naoexecutada3 = 0;

        foreach($consulta as $result){
        $atividadeID =   $result ['atividade_id'];
        if($atividadeID == 1){
            $acerto = $acertos1 + $result ['acertos'];
            $acertos1 =  $acerto;
            $erros1 = $result ['erros'];
        }else{

        }

        if($atividadeID == 2){
            $acertos2 = $result['acertos'];
            $erros2 = $result ['erros'];
        }

        if($atividadeID == 3){
            $acertos3 = $result ['acertos'];
            $erros3 = $result ['erros'];
        }

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
