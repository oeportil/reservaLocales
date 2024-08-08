<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Amenidad;

class AmenidadSeeder extends Seeder
{
    public function run()
    {
        $amenidades = [
            ['anchoMetros' => 10.00, 'largoMetros' => 20.00, 'extMetros' => 200.00, 'noSillas' => 50, 'noMesas' => 10, 'noBaños' => 2, 'noParques' => 1, 'capacidadMax' => 100, 'otrasAmen' => 'WiFi'],
            ['anchoMetros' => 15.00, 'largoMetros' => 25.00, 'extMetros' => 300.00, 'noSillas' => 60, 'noMesas' => 12, 'noBaños' => 3, 'noParques' => 2, 'capacidadMax' => 150, 'otrasAmen' => 'Aire acondicionado'],
            ['anchoMetros' => 20.00, 'largoMetros' => 30.00, 'extMetros' => 400.00, 'noSillas' => 70, 'noMesas' => 14, 'noBaños' => 4, 'noParques' => 3, 'capacidadMax' => 200, 'otrasAmen' => 'Proyector'],
        ];

        foreach ($amenidades as $amenidad) {
            Amenidad::create($amenidad);
        }
    }
}
