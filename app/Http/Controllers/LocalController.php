<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Local;
use App\Models\Reserva;
use Illuminate\Support\Facades\Validator;
use PHPMailer\PHPMailer\PHPMailer;
use Carbon\Carbon;

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

    public function store(Request $request)
    {
        $email = auth()->user()->email;
        $nombre = auth()->user()->name;

        $request->validate([
            'local_id' => 'required|integer',
            'user_id' => 'required|integer',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'total' => 'required|numeric',
            'cancelada' => 'required|boolean',
        ]);

    
        $existeReserva = Reserva::where('idLocal', $request->input('local_id'))
            ->where('cancelada', false)
            ->where(function ($query) use ($request) {
                $query->whereBetween('fechaInicio', [$request->input('fecha_inicio'), $request->input('fecha_fin')])
                    ->orWhereBetween('fechaFin', [$request->input('fecha_inicio'), $request->input('fecha_fin')])
                    ->orWhere(function ($query) use ($request) {
                        $query->where('fechaInicio', '<=', $request->input('fecha_inicio'))
                                ->where('fechaFin', '>=', $request->input('fecha_fin'));
                    });
            })
            ->exists();

        
        if ($existeReserva) {
            return back()->with('error', 'Ya existe una reserva activa para las fechas seleccionadas.');
        }

        
        $reserva = new Reserva();
        $reserva->idLocal = $request->input('local_id');
        $reserva->idUser = $request->input('user_id');
        $reserva->fechaInicio = $request->input('fecha_inicio');
        $reserva->fechaFin = $request->input('fecha_fin');
        $reserva->total = $request->input('total');
        $reserva->cancelada = $request->input('cancelada');
        $reserva->save();

        $fechaInicioFormateada = Carbon::parse($request->input('fecha_inicio'))->format('d/m/Y H:i');
        $fechaFinFormateada = Carbon::parse($request->input('fecha_fin'))->format('d/m/Y H:i');

        $message = "
        <html>
            <body>
                <div>
                    <p>Gracias por reservar con Fito Molina</p>
                    <h2>Total de reserva:</h2> 
                    <p>" . $request->input('total') . "</p>
                    <h2>Fecha Inicio:</h2> 
                    <p>" . $fechaInicioFormateada . "</p>   
                    <h2>Fecha Fin:</h2> 
                    <p>" . $fechaFinFormateada . "</p>                  
                </div>
            </body>
        </html>";
        
        $message2 = "
        <html>
            <body>
                <div>
                    <p>Nueva reserva de ". $nombre ." </p>
                    <h2>Total de reserva:</h2> 
                    <p>" . $request->input('total') . "</p>
                    <h2>Fecha Inicio:</h2> 
                    <p>" . $fechaInicioFormateada . "</p>   
                    <h2>Fecha Fin:</h2> 
                    <p>" . $fechaFinFormateada . "</p>                  
                </div>
            </body>
        </html>";
        
        $this->email(['email' => $email, 'name' => $nombre], "Reserva de Local Fito Molina", $message);

        $this->email(['email' => 'portilloernesto0902@gmail.com', 'name' => 'me'], "Nueva Reserva", $message2);

        return redirect()->route('dashboard')->with('success', 'Reserva realizada con éxito.');
    }

    function email($send = [], $subject, $message)
    {
        $mail = new PHPMailer(true);                //Enable verbose debug output
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587;
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = 'tls';
    
        $mail->Username = 'portilloernesto0902@gmail.com'; //nombre usuario
        $mail->Password = 'omwvhkrnbeqnolnu';
        $mail->setFrom('portilloernesto0902@gmail.com', 'Ernesto Portillo');
        $mail->addAddress($send['email'], $send['name']);
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->AltBody = $message;
        return $mail->send();
    }

}
