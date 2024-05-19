<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

use App\Models\Perro;



class InformeController extends Controller
{
    public function generatePDF(Request $request)
    {
        $titulo = $request->input('nombrePDF');
        $cuerpoInforme = $request->input('cuerpo');
        $adiestrador = auth()->user();
        $perroId = $request->input('perroPDF');
        $perro = Perro::find($perroId);
        $propietario = $perro->tutor_nombre . " " . $perro->tutor_apellidos;

        $data = ['title' => $titulo,
                'body' => $cuerpoInforme,
                'adiestrador' => $adiestrador->name,
                'date'=> date('d-m-Y'),
                'nombreperro' => $perro->nombre,
                'razaperro' => $perro->raza,
                'telefono' => $perro->telefono,
                'email' => $perro->email,
                'propietario' => $propietario,
            ];

        $pdf = PDF::loadView('myPDF', $data);

        return $pdf->download('mi-pdf.pdf');
    }
}