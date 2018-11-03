<?php

namespace App\Http\Controllers;
use App\Dependente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class userDependenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

      
    public function index()
    {
        $id = Auth::id();
        $users = \App\User::find($id);

        $dependente =  $users->dependentes;
        return view('dependente.GerenciarDependentes',compact('dependente'));

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
          /*if(Auth::check()){ //se tem usuario logado
            $usuario_id = Auth::id();
            }   */

          if(Auth::check()){ //se tem usuario logado
            $usuario_id = Auth()->user()->id;
        }
   

        $user = new \App\Dependente;
        $user -> user_id = $usuario_id;
        $user -> name=$request-> get('name');
        $user -> sexo =$request->get('sexo');
        $user -> dt_nascimento=$request->get('dt_nascimento');
        $user -> disturbio_id =$request->get('disturbio_id');
        $user -> texto_extra =$request->get('texto_extra'); 
        $user->save();

        $mensagem = 'Dependente criado com sucesso!';
        return redirect()->route('dependentes.index')->with('mensagem',$mensagem);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dependente = \App\Dependente::findOrFail($id);
        return view('dependente.edit',compact('dependente'));

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
        $dependente = \App\Dependente::findOrFail($id);

        $dependente->update($request->all());

        $mensagem = 'Dependente editado com sucesso!';
        return redirect()->route('dependentes.index')->with('mensagem',$mensagem);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dependente = \App\Dependente::findOrFail($id);
        $dependente->delete();
        $mensagem = "Dependente deletado com sucesso!";

//        return view('GerenciarDependentes')->with('mensagem', $mensagem);
        return redirect()->route('dependentes.index')->with('mensagem', $mensagem);
    }
}
