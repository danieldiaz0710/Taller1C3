<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'cedula','NomCompletos','ApeCompletos','telefono','email'
    ];

    protected $hidden = [
        'created_at', 'update_at'
    ];

    public function blogs(){
        return $this->hasMany('App\Models\Blog');
    }
}
