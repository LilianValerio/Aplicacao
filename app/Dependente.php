<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Dependente extends Model
{
   
    protected $fillable = ['name','disturbio_id','dt_nascimento', 'texto_extra'];
    protected $guarded = ['dependentes_id', 'created_at', 'update_at'];
    protected $table = 'dependentes';

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function resultAtividades(){
        return $this->hasMany(ResultAtividade::class)->orderBy('id');
    }

}

