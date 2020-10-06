<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Type extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'types';

    protected $filliable = [
        'name'
    ];

    /*** Una Categoria Muchas Entradas ***/
    public function notes()
    {
        return $this->hasMany('App\Models\Note');
    }
}
