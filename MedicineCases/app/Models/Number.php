<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Number extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'numbers';

    protected $fillable = [
        'secret_number'
    ];

    /*** Un Número Secreto Muchos Administradores ***/
    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
