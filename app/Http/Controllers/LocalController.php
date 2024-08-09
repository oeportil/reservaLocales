<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Local;

class LocalController extends Controller
{
    public function index(){
        //va a tomar los datos de la clase local y los va a unir con region
        $locales = Local::with('region')->get();
        //la vista es ourlocales y con compact pasa la variable a la vista
        return view('ourlocales', compact('locales'));
    }
    public function localView($idLocal){
        $local = Local::with('amenidad')->findOrFail($idLocal);
        return view('localView', compact('local'));
    }
}
