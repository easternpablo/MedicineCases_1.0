<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class NotesController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|name|max:255',
            'description' => 'required|string|description|max:5000',
            'type_id' => 'required|integer|max:20',
        ]);
    }

    public function idDetalle($id)
    {
        $note = Note::with('type')->findOrFail($id);
        return view('entradas.detalle',['note'=>$note]);
    }

    public function create()
    {
        $types = Type::all();
        return view('entradas.crear',['types'=>$types]);
    }

    public function save(Request $request)
    {
        $note = new Note();
        $note->name = $request->input('name');
        $note->description = $request->input('description');
        $note->type_id = $request->get('type');
        $image_path = $request->file('file-note');
        if($image_path)
        {
            $image_name = time().$image_path->getClientOriginalName();
            Storage::disk('notes')->put($image_name,File::get($image_path));
            $note->image = $image_name;
        }
        if($note->save())
            return redirect('/');
    }

    public function edit($id)
    {
        $note = Note::findOrFail($id);
        $categories = Type::all();
        $category_id = $note->type_id;
        $category_note = Type::findOrFail($category_id);
        return view('entradas.editar',['note'=>$note,
                                       'categories'=>$categories,
                                       'category_note'=>$category_note]);
    }

    public function saveEdit(Request $request, $id)
    {
        $note = Note::findOrFail($id);
        $note->name = $request->input('name');
        $note->description = $request->input('description');
        $note->type_id = $request->get('type');
        $image_path = $request->file('file-note');
        if($image_path === null){
            $note->image = $request->input('file-note-cambio');
        }else{
            $image_name = time().$image_path->getClientOriginalName();
            Storage::disk('notes')->put($image_name,File::get($image_path));
            $note->image = $image_name;
        }
        if($note->save())
            return redirect('/');
    }

    public function delete($id)
    {
        $note = Note::findOrFail($id);
        if($note->delete())
            return redirect('/');
    }

    public function getImage($filename)
    {
        $file = Storage::disk('notes')->get($filename);
        return new Response($file,200);
    }
}
