<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function index() {
        $user = auth()->user();
        $username = $user->name;
        $hoy = [];
        $lluviaTomorrow = null;
        $maxTemp = null;
        $windy = null;
        $no = null;
    
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
    
        return view('dashboard', ['username'=>$username, 'hoy'=>$hoy, 'lluviaTomorrow'=>$lluviaTomorrow, 'maxTemp'=>$maxTemp, 'windy'=>$windy, 'no'=>$no]);
    }
    
}
