<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;

    protected $table = 'locales';

    protected $primaryKey = 'idLocal';

    protected $fillable = [
        'idRegion',
        'idAmenidad',
        'nombre',
        'municipio',
        'direccion',
        'referencias',
        'descripcion',
        'costoHora',
        'precioRenta',
    ];

    public function region()
    {
        return $this->belongsTo(Region::class, 'idRegion');
    }

    public function amenidad()
    {
        return $this->belongsTo(Amenidad::class, 'idAmenidad');
    }

    public function reservas()
    {
        return $this->hasMany(Reserva::class, 'idLocal');
    }

    public function imagenes()
    {
        return $this->hasMany(Imagen::class, 'idLocal');
    }
}
