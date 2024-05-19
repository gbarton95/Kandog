<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Perro;

use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Informe;

class PerroController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $buscar = false;
        $perros = Perro::where('user_id', $user->id)
            ->where('active', '1')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('perro.index', ['perros' => $perros, 'buscar'=>$buscar]);
    }

    public function search(Request $busqueda)
    {
        $buscar=true;
        $user = auth()->user();
        $userRequest = $busqueda->input('searchDog');
        $perros = DB::table('perros')
            ->where('user_id', $user->id)
            ->where('active', '1')
            ->where(function ($query) use ($userRequest) {
                $query->where('nombre', 'LIKE', '%' . $userRequest . '%')
                    ->orWhere('telefono', 'LIKE', '%' . $userRequest . '%')
                    ->orWhere('tutor_nombre', 'LIKE', '%' . $userRequest . '%');
                    
             })
            ->paginate(10);
        return view('perro.index', ['perros'=>$perros, 'buscar'=>$buscar]);
    }
   
    public function create()
    {
        //Lleva a la vista del formulario
        return view('perro.create');
    }
    
    public function store(Request $request)
    {
        $user = auth()->user();
    
        $perro = new Perro();
        $perro->user_id = $user->id;
        $perro->fill($request->all());
        $perro->save();

        return redirect()->route('perro.index')->with('success', 'El perro se ha añadido a tu lista.');
    }

    
    public function show(Perro $perro)
    {
        return view('perro.show', compact('perro'));
    }

    
    public function edit(Perro $perro)
    {
        // $perro = Perro::find($id);
        return view('perro.edit', compact('perro'));
    }

    
    public function update(Request $request, Perro $perro)
    {
        $perro->update($request->all());

    return redirect()->route('perro.index')->with('success', 'Perro modificado con éxito.');
    }

    
    public function destroy(string $id)
    {
        $perro = Perro::find($id);
        $perro->active=false;
        $perro->save();
        return redirect()->route('perro.index')->with('success', 'Perro eliminado con éxito.');
    }

    public function ordenarTabla(Request $request){
        $user = auth()->user();
        $buscar = false;
        $columna = $request->input('columna');
        $perros = Perro::where('user_id', $user->id)
            ->orderBy($columna)
            ->get();
        return view('perro.index', ['perros' => $perros, 'buscar'=>$buscar])->render();
    }

    public function generarInforme()
    {
        $data = [
            'title' => 'Informe',
            'date' => date('m/d/Y'),
            'content' => 'Contenido del informe...'
        ];

        // Genera el PDF
        $pdf = PDF::loadView('reports', $data);

        // Guarda el PDF en el almacenamiento
        $pdfPath = 'reports/report_' . time() . '.pdf';
        Storage::put($pdfPath, $pdf->output());

        // Guarda la ruta del PDF en la base de datos
        $report = new Informe();
        $report->path = $pdfPath;
        $report->save();

        return response()->json(['message' => 'Informe generado y guardado correctamente', 'path' => $pdfPath]);
    }
}
