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
            $erro = $erros1 +$result ['erros']; 
            $erros1 = $erro;
        }

        if($atividadeID == 2){
            $acert =  $acertos2 + $result['acertos'];
            $acertos2 = $acert;
            $err = $erros2 + $result ['erros'];
            $erros2 = $err;
        }

        if($atividadeID == 3){
            $acertt = $acertos3 + $result ['acertos'];
            $acertos3 = $acertt;
            $erross = $erros3 + $result ['erros'];
            $erros3 = $erross;
        }

    }

  if($erros1 == null && $acertos1 == null){
    $naoexecutada1 = 1;
  } 
  if($erros2 == null && $acertos2 == null){
    $naoexecutada2 = 1;
  }    
  if($erros3 == null && $acertos3 == null){
    $naoexecutada3 = 1;
  }       
  

    return view('relatorios.home_relatorio',compact('acertos1', 'erros1','acertos2', 
    'erros2','acertos3', 'erros3' , 'name', 'naoexecutada1', 'naoexecutada2', 'naoexecutada3'));
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
