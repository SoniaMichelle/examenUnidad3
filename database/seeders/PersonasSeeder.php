<?php

namespace Database\Seeders;

use App\Models\Personas;
use Illuminate\Database\Seeder;

class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $personas = new Personas();

        $personas->apellido_paterno="Gonzalez";
        $personas->apellido_materno="Ortiz";
        $personas->nombre="Michelle";
        $personas->fecha_nacimiento="1997-08-23";
        $personas->sexo="Femenino";
        
        $personas->save();

        $personas2 = new Personas();

        $personas2->apellido_paterno="Castro";
        $personas2->apellido_materno="Alvarado";
        $personas2->nombre="Ulises";
        $personas2->fecha_nacimiento="1997-06-19";
        $personas2->sexo="Masculino";
        
        $personas2->save();

    }
}
