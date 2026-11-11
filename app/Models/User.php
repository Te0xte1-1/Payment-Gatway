<?php

namespace App\Models;

use App\Models\Role;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    protected $guarded =[];
    protected $hidden = ['created_at', 'updated_at'];

    public function roles(){
       return $this->belongsToMany(Role::class ,'role_users','user_id');
    }
}
