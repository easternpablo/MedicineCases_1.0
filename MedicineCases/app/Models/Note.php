<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Note extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'notes';

    protected $fillable = [
        'name','description','image','file','type_id',
    ];

    // Muchas Entradas Una Categoria
    public function type()
    {
        return $this->belongsTo('App\Models\Type','type_id');
    }
}
