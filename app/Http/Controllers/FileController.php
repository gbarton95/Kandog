<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Coleccion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class FileController extends Controller
{
   
    public function index() {
        $user = auth()->user();
        $files = File::where('user_id', $user->id)
                    ->where('coleccion_id', null)
                    ->where('active', '1')
                    ->get();
        $colecciones = Coleccion::where('user_id', $user->id)
                        ->get();
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
        $url = $request->file('file')->store('/public/uploads');
        $path = substr($url, 15);

        // Crea un nuevo registro en la base de datos
        $file = new File();
        $file->user_id = auth()->id(); 
        $file->perro_id = $request->input('perro_id', null);
        if($request->filled('filename')) {
            $nomcompleto = $request->file('file')->getClientOriginalName();
            $extension = '.' . pathinfo($nomcompleto, PATHINFO_EXTENSION);
            $file->filename = $request->input('filename') . $extension;
        } else {
           $file->filename = $request->file('file')->getClientOriginalName(); 
        }
        $file->type = $request->file('file')->getClientMimeType();
        $file->path = $path;
        $file->coleccion_id = $request->input('asignarColeccion', null);
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
    
        if($request->hasFile('imagenCabecera')) {
            $request->validate([
                'imagenCabecera' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:10240',
            ]);
    
            $file = new File();
            $file->user_id = auth()->id();
            $file->filename = "Cabecera_" . $coleccion->nombre . $request->file('imagenCabecera')->getClientOriginalName();
            $file->type = $request->file('imagenCabecera')->getClientMimeType();
            $url = $request->file('imagenCabecera')->store('/public/uploads');
            $path = substr($url, 15);
            $file->path = $path;
            $file->coleccion_id = $coleccion->id;
            $file->active = false;
            $file->save();
    
            $coleccion->imagenCabecera = $path;
    
        } else {
            $coleccion->imagenCabecera = "collectionIcon.webp";
        }
    
        $coleccion->save();
    
        return back();
    }

    public function showCollection($coleccion) {

        $user = auth()->user();
        $colecciones = Coleccion::where('user_id', $user->id)->get();
        $colec = Coleccion::find($coleccion);
        $files = File::where('user_id', $user->id)
                    ->where('coleccion_id', $coleccion)
                    ->where('active', '1')
                    ->get();

        return view('file.collectionshow', compact('files', 'colec', 'colecciones'));
    }
    

    // Método para descargar un archivo
    public function download(File $file)
    {
        $filePath = storage_path('app/public/uploads/' . $file->path);
        return Response::download($filePath, $file->filename);
    }

    public function updateFile(Request $request, $file_id)
    {
        $file = File::find($file_id);
        $file->user_id = $file->user_id;
        $file->filename = $request->input('filename');
        $file->coleccion_id = $request->input('asignarColeccion');

        $file->save();

    return redirect()->back()->with('success', 'Archivo modificado con éxito.');
    }


    public function destroyFile(string $id)
    {
        $file = File::find($id);
        $file->active=false;
        $file->save();

        return redirect()->route('file.index')->with('success', 'Archivo eliminado con éxito.');
    }

    public function destroyCollection(string $id)
    {
        $colec = Coleccion::find($id);
        $colec->delete();

        return redirect()->route('file.index')->with('success', 'Colección eliminada con éxito.');
    }

}
