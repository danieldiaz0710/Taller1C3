<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable =[
        'user_id','nombre','fecha_creacion'
    ];

    protected $hidden = [
        'created_at', 'update_at'
    ];


    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
