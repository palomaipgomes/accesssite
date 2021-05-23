<?php

use Illuminate\Database\Seeder;
use App\Somo;

class SomosSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $existe = Somo::where('tipo', '-', 'sobre') -> count();

        if($existe){
            $somoSobre = Somo::where('tipo', '-', 'sobre') -> first();
        } else{
            $somoSobre = new Somo();
        }

        $somoSobre-> titulo = "A Empresa";
        $somoSobre-> descricao = "Descricao breve sobre a empresa";
        $somoSobre-> texto = "A Empresa";
        $somoSobre-> imagem = "site/img/equipe.jpg";
        $somoSobre-> tipo= "sobre";
        $somoSobre-> save();
    }
}