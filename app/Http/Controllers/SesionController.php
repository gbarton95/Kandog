<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Sesion;
use App\Models\Perro;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class SesionController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $sesionesPendientes = Sesion::where('user_id', $user->id)
            ->where('active', '1')
            ->where('inicio', '>', Carbon::now())
            ->orderBy('inicio')
            ->paginate(10);
        $sesionesPasadas = Sesion::where('user_id', $user->id)
            ->where('active', '1')
            ->where('inicio', '<', Carbon::now())
            ->orderBy('inicio', 'desc')
            ->paginate(10);
        return view('sesion.index', ['sesionesPendientes' => $sesionesPendientes, 'sesionesPasadas'=>$sesionesPasadas]);
    }

    public function createSesion($id)
    {
        $user = auth()->user();
        $perro = Perro::find($id);
        $sesionesTotales = DB::table('sesiones')
            ->where('user_id', $user->id)
            ->where('active', '1')
            ->where('perro_id', $id)
            ->count();
        return view('sesion.create', ['perro' => $perro, 'sesionesTotales' => $sesionesTotales]);
    }

    public function store(Request $request)
    {
        $sesion = new Sesion();
        $user = auth()->user()->id;
        $id = $request->perro_id;
        $perro = Perro::find($id);

        $sesion->user_id = $user;
        $sesion->perro_id = $perro->id;
        $sesion->asunto = $request->asunto;
        if ($request->locationOption === 'same') {
            $sesion->ubicacion = $perro->calle;
        } else {
            $sesion->ubicacion = $request->otherLocation;
        }
        $sesion->inicio = $request->inicio;
        $sesion->duracion = $request->duracion;
        $sesion->done = false;

        $sesion->save();

        return redirect()->route('sesion.index')->with('success', 'La sesión ha sido creada.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Sesion $sesion)
    {
        $user = auth()->user()->id;
        $perro = $sesion->perro;
        $perroid = $sesion->perro->id;
        $sesionesTotales = DB::table('sesiones')
            ->where('user_id', $user)
            ->where('active', '1')
            ->where('perro_id', $perroid)
            ->count();
        return view('sesion.edit', ['sesion'=>$sesion, 'perro' => $perro, 'sesionesTotales' => $sesionesTotales]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sesion $sesion)
    {
        $sesion->update($request->all());

        return redirect()->route('sesion.index')->with('success', 'Sesión modificada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sesion = Sesion::find($id);
        $sesion->active = false;
        $sesion->save();
        return redirect()->route('sesion.index')->with('success', 'Sesión eliminada con éxito.');
    }
}
