<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependente extends Model
{
   
    protected $fillable = ['name','disturbio_id','dt_nascimento'];
    protected $guarded = ['dependentes_id', 'created_at', 'update_at'];
    protected $table = 'dependentes';
}
