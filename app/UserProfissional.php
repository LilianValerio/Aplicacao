<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfissional extends Model
{
    protected $fillable = ['profissao','especialidade','dt_ini_area'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'users_profissional';
    
    public function users(){
        return $this->belongsTo(User::class);
    }
    
    public function profissional(){
        return $this->belongsTo(User::class);
    }
}
