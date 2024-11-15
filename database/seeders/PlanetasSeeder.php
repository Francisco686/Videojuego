<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Planeta;

class PlanetasSeeder extends Seeder
{
    public function run()
    {
        Planeta::create(['nombre' => 'Mercurio', 'imagen' => 'ruta/a/imagen_mercurio.jpg', 'descripcion' => 'Mercurio es el planeta más cercano al Sol.']);
        Planeta::create(['nombre' => 'Venus', 'imagen' => 'ruta/a/imagen_venus.jpg', 'descripcion' => 'Venus es conocido como el planeta más caliente del sistema solar.']);
        Planeta::create(['nombre' => 'Tierra', 'imagen' => 'ruta/a/imagen_tierra.jpg', 'descripcion' => 'La Tierra es el único planeta conocido que alberga vida.']);
        Planeta::create(['nombre' => 'Marte', 'imagen' => 'ruta/a/imagen_marte.jpg', 'descripcion' => 'Marte es conocido como el planeta rojo y podría tener agua en estado subterráneo.']);
    }
}
