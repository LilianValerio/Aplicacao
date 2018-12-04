<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    //
    public function palavras(){
        return $this->hasMany(Palavra::class);
    }

    public function letras(){
        return $this->hasMany(Letra::class);
    }

    public function silabas(){
        return $this->hasMany(Silaba::class);
    }
}
