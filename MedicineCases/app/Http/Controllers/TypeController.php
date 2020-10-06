<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TypeController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|name|max:255',
        ]);
    }

    public function create()
    {
        return view('nuevoTipo');
    }

    public function save(Request $request)
    {
        $type = new Type();
        $type->name = $request->input('tipo');
        if($type->save()){
            return redirect('/');
        }
    }
}
