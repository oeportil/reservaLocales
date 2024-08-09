<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Local;

class LocalController extends Controller
{
    public function index(){
        $locales = Local::with('region')->get();
        
        return view('ourlocales', compact('locales'));
    }
}
