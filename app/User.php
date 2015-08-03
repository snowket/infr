<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $fillable=[
        'username',
        'password',
        'email'
    ];
    public function Post()
    {
        return $this->hasMany('App\Post','user_id');
    }
}
