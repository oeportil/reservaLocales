<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Local;

class LocalSeeder extends Seeder
{
    public function run()
    {
        $locales = [
            // San Salvador - Zona Metropolitana
            ['idRegion' => 1, 'idAmenidad' => 1, 'nombre' => 'Local A1', 'municipio' => 'San Salvador', 'direccion' => 'Direccion 1', 'referencias' => 'Referencia 1', 'descripcion' => 'Descripcion 1', 'costoHora' => 50.00, 'precioRenta' => 300.00],
            ['idRegion' => 1, 'idAmenidad' => 2, 'nombre' => 'Local A2', 'municipio' => 'San Salvador', 'direccion' => 'Direccion 2', 'referencias' => 'Referencia 2', 'descripcion' => 'Descripcion 2', 'costoHora' => 60.00, 'precioRenta' => 350.00],
            ['idRegion' => 1, 'idAmenidad' => 3, 'nombre' => 'Local A3', 'municipio' => 'San Salvador', 'direccion' => 'Direccion 3', 'referencias' => 'Referencia 3', 'descripcion' => 'Descripcion 3', 'costoHora' => 70.00, 'precioRenta' => 400.00],

            // La Libertad - Zona Occidente
            ['idRegion' => 2, 'idAmenidad' => 1, 'nombre' => 'Local B1', 'municipio' => 'Santa Tecla', 'direccion' => 'Direccion 4', 'referencias' => 'Referencia 4', 'descripcion' => 'Descripcion 4', 'costoHora' => 80.00, 'precioRenta' => 450.00],
            ['idRegion' => 2, 'idAmenidad' => 2, 'nombre' => 'Local B2', 'municipio' => 'Santa Tecla', 'direccion' => 'Direccion 5', 'referencias' => 'Referencia 5', 'descripcion' => 'Descripcion 5', 'costoHora' => 90.00, 'precioRenta' => 500.00],
            ['idRegion' => 2, 'idAmenidad' => 3, 'nombre' => 'Local B3', 'municipio' => 'Santa Tecla', 'direccion' => 'Direccion 6', 'referencias' => 'Referencia 6', 'descripcion' => 'Descripcion 6', 'costoHora' => 100.00, 'precioRenta' => 550.00],

            // San Miguel - Zona Oriente
            ['idRegion' => 3, 'idAmenidad' => 1, 'nombre' => 'Local C1', 'municipio' => 'San Miguel', 'direccion' => 'Direccion 7', 'referencias' => 'Referencia 7', 'descripcion' => 'Descripcion 7', 'costoHora' => 110.00, 'precioRenta' => 600.00],
            ['idRegion' => 3, 'idAmenidad' => 2, 'nombre' => 'Local C2', 'municipio' => 'San Miguel', 'direccion' => 'Direccion 8', 'referencias' => 'Referencia 8', 'descripcion' => 'Descripcion 8', 'costoHora' => 120.00, 'precioRenta' => 650.00],
            ['idRegion' => 3, 'idAmenidad' => 3, 'nombre' => 'Local C3', 'municipio' => 'San Miguel', 'direccion' => 'Direccion 9', 'referencias' => 'Referencia 9', 'descripcion' => 'Descripcion 9', 'costoHora' => 130.00, 'precioRenta' => 700.00],
        ];

        foreach ($locales as $local) {
            Local::create($local);
        }
    }
}
