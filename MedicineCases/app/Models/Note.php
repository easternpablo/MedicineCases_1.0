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
        'name',
        'description',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        'image6',
        'image7',
        'image8',
        'image9',
        'image10',
        'file1',
        'file2',
        'type_id',
    ];

    // Muchas Entradas Una Categoria
    public function type()
    {
        return $this->belongsTo('App\Models\Type','type_id');
    }
}
