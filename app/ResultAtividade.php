<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultAtividade extends Model
{
    protected $fillable = [''];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'result_atividades';

    public function dependentes(){
        return $this->belongsTo(Dependente::class);
    }  

}
