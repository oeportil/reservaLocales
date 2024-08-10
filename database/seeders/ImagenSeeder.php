<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Imagen;

class ImagenSeeder extends Seeder
{
    public function run()
    {
        $imagenes = [
            ['idLocal' => 1, 'url' => 'https://lh5.googleusercontent.com/proxy/q86voQit6v6tA7St4v3mGU-w5pdvfKPSksepxw9xVOzXBbZ_LJVPJYdXTCzt7AS8K3NbyGQwQxr7NPM0ec9CEjzO81i1uR1omE_N5y5UBhhGKImA1Az0kpXGRQqZiumbjj351Wj4eqbyus-6Fllil-0'], 
            ['idLocal' => 2, 'url' => 'https://cubanamambisa.wordpress.com/wp-content/uploads/2020/05/locales-para-fiestas-en-cuba.jpg'], 
            ['idLocal' => 3, 'url' => 'https://www.bienesonline.com/mexico/photos/sala-de-fiestas-en-progreso-yucatan-a-una-calle-del-mar-14915942974.jpg'], 
            ['idLocal' => 4, 'url' => 'https://www.eventplannermexico.mx/wp-content/uploads/2022/09/renta-de-salones-para-eventos-en-la-cdmx.jpg'], 
            ['idLocal' => 5, 'url' => 'https://www.occasionshall.com/wp-content/uploads/2020/01/Occasions-Hall-Gold-Setup-5-700x525.jpg'], 
            ['idLocal' => 6, 'url' => 'https://hostalwaullacinnhuaraz.com/photos-alquiler-local-eventos-huaraz/alquiler%20de%20local%20(2).jpg'], 
            ['idLocal' => 7, 'url' => 'https://image-tc.galaxy.tf/wijpeg-7kkb45t8nfrrt9hvzei0edx8j/2-foto-principal_wide.jpg?crop=0%2C94%2C1800%2C1013&width=2100'], 
            ['idLocal' => 8, 'url' => 'https://www.enriqueexpedition.com/photos-alquiler-local-eventos-huaraz/alquiler-local-para-ventos-huaraz-2016.jpg'], 
            ['idLocal' => 9, 'url' => 'https://cdn0.bodas.com.mx/vendor/0582/3_2/960/jpg/jardin-del-lago-0003_5_110582-164488484945720.jpeg'], 
        ];

        foreach ($imagenes as $imagen) {
            Imagen::create($imagen);
        }
    }
}
