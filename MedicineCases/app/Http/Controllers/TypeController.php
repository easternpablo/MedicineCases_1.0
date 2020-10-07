<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TypeController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|name|max:255',
        ]);
    }

    /** Mostrar todas las entradas de una categoría determinada **/
    public function idType($id)
    {
        $type = Type::findOrFail($id);
        $notes = DB::table('notes')
                ->join('types','notes.type_id','=','types.id')
                ->select('notes.*')
                ->where('notes.type_id','=',$id)
                ->paginate(3);
        return view('filtro',['notes'=>$notes, 'type'=>$type]);
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
