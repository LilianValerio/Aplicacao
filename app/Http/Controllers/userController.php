<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = \App\User::all();
        return view('usuario.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view ('usuario.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new \App\User;
        
        $user -> name=$request-> get('name');
        $user -> email=$request->get('email');
        $user -> password =$request->get('password');
        $user -> cpf =$request->get('cpf');
        $user -> sexo =$request->get('sexo');
        $user -> perfil =$request->get('perfil');
        $user -> profissao_id =$request->get('profissao_id');
        $user -> telefone =$request->get('telefone');
        $user -> cidade =$request->get('cidade');
        $user -> estado =$request->get('estado');
        $user -> disturbio_id =$request->get('disturbio_id');
        $user -> data_nasc =$request->get('data_nasc');  

        $user->save();

        return redirect('usuario.index')->with('sucess', 'Cadastro Realizado!');

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
