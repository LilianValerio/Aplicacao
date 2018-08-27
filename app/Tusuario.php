<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tusuario extends Model
{
    protected $fillable = ['nome_user', 'sobrenome_user', 'sexo_user', 'email_user', 'senha_user',
     'tel_user', 'cidade_user', 'estado_user', 'tipo_user'];
    protected $guarded = ['id_user', 'created_at', 'update_at'];
    protected $table = ['tusuario'];
}
