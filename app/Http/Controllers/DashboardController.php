<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;

class DashboardController extends Controller
{
    public function index(){
        $idUser = auth()->id();
        $reservaciones = Reserva::where("idUser", $idUser)->get();
        return view('dashboard', compact('reservaciones'));
    }
}
