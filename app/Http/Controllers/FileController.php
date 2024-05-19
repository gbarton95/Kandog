<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Coleccion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class FileController extends Controller
{
   
    public function index() {
        $files = File::all();
        $colecciones = Coleccion::all();
        // dd($colecciones);
        return view('file.index', compact('files', 'colecciones'));
    }
     
    public function store(Request $request)
    {
        // Valida la petición
        $request->validate([
            'file' => 'required|file|max:10240', // Max size 10MB
        ]);

        // Sube el archivo
        $path = $request->file('file')->store('uploads');

        // Crea un nuevo registro en la base de datos
        $file = new File();
        $file->user_id = auth()->id(); 
        $file->perro_id = $request->input('perro_id', null);
        if($request->filled('filename')) {
           $file->filename = $request->input('filename');
        } else {
           $file->filename = $request->file('file')->getClientOriginalName(); 
        }

        $file->type = $request->file('file')->getClientMimeType();
        $file->path = $path;
        $file->coleccion = $request->input('coleccion', null);
        $file->active = true;
        
        $file->save();

        return back();
    }

    public function storeCollection(Request $request) {
        $user = auth()->user();

        $coleccion = new Coleccion();
        $coleccion->user_id = $user->id;
        $coleccion->nombre = $request->input('nombre');
        $coleccion->descripcion = $request->input('descripcion');
        $coleccion->imagenCabecera = "images/collectionIcon.webp";

        // if ($request->hasFile('imagenCabecera')) {
        //     $request->validate([
        //         'imagenCabecera' => 'required|file|max:10240'
        //     ]);
        //     $path = $request->file('imagenCabecera')->store('public/uploads');
        //     $coleccion->imagenCabecera = $path;
        // } else {
        //     $coleccion->imagenCabecera = "images/collectionIcon.webp";
        // }

        $coleccion->save();

        return back();
    }

    public function showCollection(Coleccion $id) {

        $user = auth()->user();
        $files = File::where('user_id', $user->id)
                    ->where('coleccion', $id)
                    ->where('active', '1')
                    ->get();

        return view('file.collectionshow', compact('files'));
    }
    

    // Método para descargar un archivo
    public function download(File $file)
    {
        $filePath = storage_path('app/' . $file->path);
        return Response::download($filePath, $file->filename);
    }
}
