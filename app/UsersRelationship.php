<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersRelationship extends Model
{
    protected $fillable = ['user_id','user_profissional_id'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'users_relationships';
}
