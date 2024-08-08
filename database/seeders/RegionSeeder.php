<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Region;

class RegionSeeder extends Seeder
{
    public function run()
    {
        $regions = [
            ['departamento' => 'San Salvador', 'nombre' => 'Zona Metropolitana'],
            ['departamento' => 'La Libertad', 'nombre' => 'Zona Occidente'],
            ['departamento' => 'San Miguel', 'nombre' => 'Zona Oriente'],
        ];

        foreach ($regions as $region) {
            Region::create($region);
        }
    }
}
