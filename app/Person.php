<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table='persons';

    protected $fillable=[
        'user',
        'email',
        'phoneNumber',
        'personalNumber'
    ];
    public function Users()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
