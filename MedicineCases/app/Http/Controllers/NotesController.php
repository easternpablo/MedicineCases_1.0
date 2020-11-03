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
            'description' => 'required|text|description',
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
        $note->description = $request->input('cke_editor');
        $note->type_id = $request->get('type');
        $image_path1 = $request->file('file-note1');
        if($image_path1)
        {
            $image_name = time().$image_path1->getClientOriginalName();
            Storage::disk('notes')->put($image_name,File::get($image_path1));
            $note->image1 = $image_name;
        }
        $image_path2 = $request->file('file-note2');
        if($image_path2)
        {
            $image_name = time().$image_path2->getClientOriginalName();
            Storage::disk('notes')->put($image_name,File::get($image_path2));
            $note->image2 = $image_name;
        }
        $image_path3 = $request->file('file-note3');
        if($image_path3)
        {
            $image_name = time().$image_path3->getClientOriginalName();
            Storage::disk('notes')->put($image_name,File::get($image_path3));
            $note->image3 = $image_name;
        }
        $image_path4 = $request->file('file-note4');
        if($image_path4)
        {
            $image_name = time().$image_path4->getClientOriginalName();
            Storage::disk('notes')->put($image_name,File::get($image_path4));
            $note->image4 = $image_name;
        }
        $image_path5 = $request->file('file-note5');
        if($image_path5)
        {
            $image_name = time().$image_path5->getClientOriginalName();
            Storage::disk('notes')->put($image_name,File::get($image_path5));
            $note->image5 = $image_name;
        }
        $image_path6 = $request->file('file-note6');
        if($image_path6)
        {
            $image_name = time().$image_path6->getClientOriginalName();
            Storage::disk('notes')->put($image_name,File::get($image_path6));
            $note->image6 = $image_name;
        }
        $image_path7 = $request->file('file-note7');
        if($image_path7)
        {
            $image_name = time().$image_path7->getClientOriginalName();
            Storage::disk('notes')->put($image_name,File::get($image_path7));
            $note->image7 = $image_name;
        }
        $image_path8 = $request->file('file-note8');
        if($image_path8)
        {
            $image_name = time().$image_path8->getClientOriginalName();
            Storage::disk('notes')->put($image_name,File::get($image_path8));
            $note->image8 = $image_name;
        }
        $image_path9 = $request->file('file-note9');
        if($image_path9)
        {
            $image_name = time().$image_path9->getClientOriginalName();
            Storage::disk('notes')->put($image_name,File::get($image_path9));
            $note->image9 = $image_name;
        }
        $image_path10 = $request->file('file-note10');
        if($image_path10)
        {
            $image_name = time().$image_path10->getClientOriginalName();
            Storage::disk('notes')->put($image_name,File::get($image_path10));
            $note->image10 = $image_name;
        }
        $pdf_path1 = $request->file('file-pdf1');
        if($pdf_path1)
        {
            $pdf = time().$pdf_path1->getClientOriginalName();
            Storage::disk('pdfs')->put($pdf,File::get($pdf_path1));
            $note->file1 = $pdf;
        }
        $pdf_path2 = $request->file('file-pdf2');
        if($pdf_path2)
        {
            $pdf = time().$pdf_path2->getClientOriginalName();
            Storage::disk('pdfs')->put($pdf,File::get($pdf_path2));
            $note->file2 = $pdf;
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

    protected function download($pdf)
    {
        $pdf_path = storage_path().'/app/pdfs/'.$pdf;
        return response()->download($pdf_path);
    }
}
