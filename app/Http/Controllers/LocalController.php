<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Local;

class LocalController extends Controller
{
    public function index(){
        
        $locales = Local::with(['region', 'imagenes'])->get();
        
        return view('ourlocales', compact('locales'));
    }

    public function localView($idLocal){
        $local = Local::with(['amenidad', 'imagenes'])->findOrFail($idLocal);
        return view('localView', compact('local'));
    }
}
