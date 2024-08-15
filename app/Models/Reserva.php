<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $primaryKey = 'idReserva';

    protected $fillable = [
        'idLocal',
        'idUser',
        'total',
        'cancelada',
        'fechaInicio',
        'fechaFin',
    ];

    public function local()
    {
        return $this->belongsTo(Local::class, 'idLocal');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'idUser');
    }
}
