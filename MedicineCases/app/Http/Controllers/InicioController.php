<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Note;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        $categories = Type::all();
        $notes = Note::with('type')->orderBy('id','desc')->simplePaginate(4);
        return view('inicio', ['categories'=>$categories, 'notes'=>$notes]);
    }
}
