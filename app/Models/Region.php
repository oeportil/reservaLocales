<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $table = 'regiones';

    protected $primaryKey = 'idRegion';

    protected $fillable = [
        'departamento',
        'nombre',
    ];

    public function locales()
    {
        return $this->hasMany(Local::class, 'idRegion');
    }
}
