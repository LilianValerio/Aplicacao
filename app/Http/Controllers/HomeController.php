<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        if(Auth::check()){
            $perfil = Auth()->user()->perfil;
            $id = Auth()->user()->id;
        }
             
        if($perfil == "P"){ 
           // return view('profissional.CadastroProfissional');
            $id = Auth::id();
            $users = \App\User::find($id);
    
            $profissional =  $users->existProfissional($id);
            if($profissional == null){
                return view('profissional.CadastroProfissional');
            }else{
                return view('home_pro');  
            }

            
        }else{
            return view('home');
        }
      
        return view('home');
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('home_pro');
    
    }
}
