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
        return view('detalle',['note'=>$note]);
    }

    public function create()
    {
        $types = Type::all();
        return view('nuevaEntrada',['types'=>$types]);
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

    public function getPdf($filename)
    {
        $file = Storage::disk('pdfs')->get($filename);
        return new Response($file,200);
    }
}
