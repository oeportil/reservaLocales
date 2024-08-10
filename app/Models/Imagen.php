<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;

    protected $table = "imagenes";

    protected $primaryKey = 'idImagen';

    protected $fillable = [
        'idLocal',
        'url'
    ];

    public function local() {
        return $this->belongsTo(Local::class, 'idLocal');
    }
}
