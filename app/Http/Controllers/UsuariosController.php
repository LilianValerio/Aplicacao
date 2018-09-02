<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Tusuario;

class UsuariosController
{
    
    public function index (){
        $usuarios = Tusuario::all();
        $total = Tusuario::all()->count();
        return view ("lista-usuarios", compact ('usuarios', 'total'));
        }


        public function create(){
            return view ('include-usuario');
            }

            
public function insert(Request $request){
    $usuario = new Tusuario;
    $usuario->id_user =$request->id_user;
    $usuario->nome_user =$request->nome_user;
    $usuario->sobrenome_user = $request->sobrenome_user;
    $usuario->sexo_user = $request->sexo_user;
    $usuario->email_user = $request->email_user;
    $usuario->senha_user = $request->senha_user;
    $usuario->tel_user = $request->tel_user;
    $usuario->cidade_user = $request->cidade_user;
    $usuario->estado_user = $request->estado_user;
    $usuario->tipo_user = $request->tipo_user;
    $usuario->save();
    return redirect ()->route('product.index')->with('message', 'Salvo com Sucesso!');;
    }

    public function update(Request $request, $id_user){
        $usuario = Tusuario::findOrFail($id_user);
        $usuario->id_user =$request->id_user;
        $usuario->nome_user =$request->nome_user;
        $usuario->sobrenome_user = $request->sobrenome_user;
        $usuario->sexo_user = $request->sexo_user;
        $usuario->email_user = $request->email_user;
        $usuario->senha_user = $request->senha_user;
        $usuario->tel_user = $request->tel_user;
        $usuario->cidade_user = $request->cidade_user;
        $usuario->estado_user = $request->estado_user;
        $usuario->tipo_user = $request->tipo_user;
        $usuario->save();
        return redirect ()->route('product.index')->with('message', 'Alterado com Sucesso!');;
        }

        public function delete ($id_user){
            $usuario = Tusuario::findOrFail($id_user);
            $usuario-> delete();
            return redirect ()->route('product.index')->with('message', 'Apagado com Sucesso!');;
        }


}
