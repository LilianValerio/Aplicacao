<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'perfil',
    ];

    protected $guarded=['id', 'created_at', 'updated_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function dependentes(){
        return $this->hasMany(Dependente::class)->orderBy('dt_nascimento');
    }

    public function profissionais(){
        return $this->hasMany(UserProfissional::class)->orderBy('id');
    }

    public function users(){
        return $this->belongsTo(User::class);
    }

      public function existProfissional(){
        return $this->belongsTo(UserProfissional::class);
      }
}
