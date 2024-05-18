<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LocaleController extends Controller
{
    public function setLocale($locale)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $user->locale = $locale;
            $user->save();
        }
        
        session(['locale' => $locale]);
        App::setLocale($locale);
        
        return redirect()->back();
    }
}
