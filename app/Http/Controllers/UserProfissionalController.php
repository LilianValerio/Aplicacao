<?php

namespace App\Http\Controllers;
use App\Dependente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfissionalController extends Controller
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
        $profissional =  $users->profissionais;

        $profissionais = \App\UserProfissional::All();
        
        return view('profissional.GerenciarProfissionais',compact('profissional', 'profissionais'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profissional.gerenciarProfissionais');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check()){ //se tem usuario logado
            $usuario_id = Auth()->user()->id;
            $usuario_name = Auth()->user()->name;
        }

            $user = new \App\UserProfissional;
        $user -> user_id = $usuario_id;
        $user -> name = $usuario_name;
        $user -> profissao=$request-> get('profissao');
        $user -> especialidade =$request->get('especialidade');
        $user -> dt_ini_area=$request->get('dt_ini_area');
        $user -> campo_extra =$request->get('campo_extra'); 
        $user->save();

        $mensagem = 'Profissional criado com sucesso!';
//return redirect()->route('home.show')->with('mensagem',$mensagem);
return view('home_pro');
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
        if(Auth::check()){ //se tem usuario logado
            $usuario_id = Auth()->user()->id;
        }
        $relacione = new \App\UsersRelationship;
        $relacione -> Solicitado = "S";
        $relacione -> user_id = $usuario_id; 
        $relacione -> user_profissional_id = $id;
        $relacione->save();

        $mensagem = 'Efetuado a solicitação ao profissional com Sucesso!';
        return redirect()->route('profissional.index')->with('mensagem', $mensagem);

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
        $dependente = \App\UserProfissional::findOrFail($id);

        $dependente->update($request->all());
        $mensagem = 'Profissional alterado com sucesso!';
        return redirect()->route('profissional.index')->with('mensagem',$mensagem);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profissional = \App\UserProfissional::findOrFail($id);
        $profissional->delete();
        $mensagem = "Profissional deletado com sucesso!";

        return redirect()->route('profissional.index')->with('mensagem', $mensagem);
    }
    
}
