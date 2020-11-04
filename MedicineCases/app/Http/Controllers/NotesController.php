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
        $note->description = $request->input('cke_editor');
        $note->type_id = $request->get('type');
        $image_path = $request->file('file-note');
        if($image_path === null){
            $note->image1 = $request->input('file-note-cambio');
        }
        else
        {
            $image_name = time().$image_path->getClientOriginalName();
            Storage::disk('notes')->put($image_name,File::get($image_path));
            $note->image1 = $image_name;
        }
        $file_pdf1 = $request->file('file-pdf1');
        if($file_pdf1 === null){
            $note->file1 = $request->input('file-pdf-cambio1');
        }
        else
        {
            $pdf = time().$file_pdf1->getClientOriginalName();
            Storage::disk('pdfs')->put($pdf,File::get($file_pdf1));
            $note->file1 = $pdf;
        }
        $file_pdf2 = $request->file('file-pdf2');
        if($file_pdf2 === null){
            $note->file2 = $request->input('file-pdf-cambio2');
        }
        else
        {
            $pdf = time().$file_pdf2->getClientOriginalName();
            Storage::disk('pdfs')->put($pdf,File::get($file_pdf2));
            $note->file2 = $pdf;
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
