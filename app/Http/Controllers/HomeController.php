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
        $profissional =  \App\UserProfissional::where('user_id',$id);       
         if($profissional == NULL ||  $profissional == ""){
            return view('profissional.CadastroProfissional');       
         }else{
            return view('home');  
         }

       }else{
        return view('home');   
       } 
        
    }
}
