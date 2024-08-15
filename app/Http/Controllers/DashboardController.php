<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;

class DashboardController extends Controller
{
    public function index(){
        $userId = auth()->user()->id;

    
        $reservas = Reserva::with('local') 
                    ->where('idUser', $userId)
                    ->orderBy('fechaInicio', 'asc')
                    ->get();

        return view('dashboard', compact('reservas'));
    }

    public function cancelar($id)
    {
        $reserva = Reserva::findOrFail($id);

        $fechaActual = now();
        $fechaLimiteCancelacion = \Carbon\Carbon::parse($reserva->fechaInicio)->subDays(2);

        if ($fechaActual->greaterThanOrEqualTo($fechaLimiteCancelacion)) {
            return back()->with('error', 'No se puede cancelar la reserva, ya que está dentro del periodo de no cancelación.');
        }

        // Cancelar la reserva
        $reserva->cancelada = true;
        $reserva->save();

        return back()->with('success', 'La reserva ha sido cancelada exitosamente.');
    }

}
