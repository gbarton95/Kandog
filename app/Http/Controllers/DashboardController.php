<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use App\Models\Sesion;
use Locale;

class DashboardController extends Controller
{
    public function index() {
        $user = auth()->user();
        $locale = App::getLocale();
        $username = $user->name;
        $hoy = [];
        $lluviaTomorrow = null;
        $maxTemp = null;
        $windy = null;
        $no = null;
        $proxDiaSesion = "";
        $proxHoraSesion ="";
    
        //API TIEMPO
        try {
            //Llamada a la API
            $respuesta = Http::withHeaders([
                'X-RapidAPI-Host' => 'weatherapi-com.p.rapidapi.com',
                'X-RapidAPI-Key' => 'f3be588d37msh40e913cbe764a68p1eafa1jsnf1ebda0330e2',
            ])->get('https://weatherapi-com.p.rapidapi.com/forecast.json?q=Zaragoza&days=3&lang=España');

            $hoy = [
                'temp' => $respuesta->json('current.temp_c'),
                'viento' => $respuesta->json('current.wind_kph'),
                'icono' => $respuesta->json('current.condition.icon')
            ];
    
            if($respuesta->json('forecast.forecastday.1.day.daily_will_it_rain')==1){
                $lluviaTomorrow = "Tomorrow's going to rain!";
            }
    
            if($respuesta->json('forecast.forecastday.0.day.maxtemp_c')>30){
                $maxTemp = $respuesta->json('forecast.forecastday.0.day.maxtemp_c');
            }
    
            if($respuesta->json('forecast.forecastday.0.day.maxwind_mph')>50){
                $windy = "Very windy today!";
            }
        } catch (\Exception $e) {//si no puede conectarse...
            $no = "No weather data available";
        }

        //CALENDARIO HOY
        $months = ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"];
        $meses = ["ENE", "FEB", "MAR", "ABR", "MAY", "JUN", "JUL", "AGO", "SEP", "OCT", "NOV", "DIC"];
        
        if($locale === 'es') {
           $fechaHoy = Carbon::today()->day . " " . $meses[Carbon::today()->month - 1]; 
        } else {
           $fechaHoy = $months[Carbon::today()->month - 1] . " " . Carbon::today()->day . "th"; 
        }
    
        //CURIOSIDAD SOBRE PERROS
        $filePath = storage_path('app/curiosidades_perros.json');
        $curiosidadesPerros = json_decode(File::get($filePath), true);
        $curiosidadAleatoria = $curiosidadesPerros[array_rand($curiosidadesPerros)];
    

        //SESIONES PRÓXIMAS
        $sesionesHoy = Sesion::where('user_id', $user->id)
            ->whereDate('inicio', Carbon::today()->toDateString())
            ->where('active', '1')
            ->orderBy('inicio')
            ->get();

        $fiveDays =  Carbon::today()->addDays(5)->toDateString();
        
        $sesionesProximas = Sesion::where('user_id', $user->id)
            ->whereDate('inicio', '>', Carbon::today()->toDateString())
            ->whereDate('inicio', '<=', $fiveDays)
            ->where('active', '1')
            ->orderBy('inicio')
            ->get();

        if(!empty($sesionesProximas) && isset($sesionesProximas[0])) {
            $proxDiaSesion = Carbon::parse($sesionesProximas[0]->inicio)->format('d-m');
            $proxHoraSesion = Carbon::parse($sesionesProximas[0]->inicio)->format('H:i');
        }

           
      
        return view('dashboard', ['username'=>$username, 'hoy'=>$hoy, 'lluviaTomorrow'=>$lluviaTomorrow, 'maxTemp'=>$maxTemp, 'windy'=>$windy, 'no'=>$no,
                    'fechaHoy'=>$fechaHoy, 'curiosidadPerro' => $curiosidadAleatoria, 'sesionesHoy' => $sesionesHoy,
                    'sesionesProximas' => $sesionesProximas, 'proxDiaSesion'=>$proxDiaSesion, 'proxHoraSesion'=>$proxHoraSesion]);
    }
    
}
