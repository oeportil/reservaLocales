<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenidad extends Model
{
    use HasFactory;

    protected $table = 'amenidades';

    protected $primaryKey = 'idAmenidad';

    protected $fillable = [
        'anchoMetros',
        'largoMetros',
        'extMetros',
        'noSillas',
        'noMesas',
        'noBaños',
        'noParques',
        'capacidadMax',
        'otrasAmen',
    ];

    public function locales()
    {
        return $this->hasMany(Local::class, 'idAmenidad');
    }
}
