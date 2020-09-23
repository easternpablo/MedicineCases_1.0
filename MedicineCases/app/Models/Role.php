<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Role extends Model
{
    use HasFactory, Notifiable;

    protected $filliable = [
        'name'
    ];

    /*** Un Rol Muchos Usuarios ***/
    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
