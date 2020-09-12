<?php

use Illuminate\Database\Seeder;
use App\Filmography;

class FilmographiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $post = array (
            [
                'year_id' => '34',
                'name' => 'Sitiados',
                'file' => 'http://127.0.0.1:8000/image/filmografia/sitiados.jpg'
                ],
                [
                'year_id' => '34',
                'name' => 'Por La Mascara',
                'file' => 'http://127.0.0.1:8000/image/filmografia/mask.jpg'
                ],
                [

                'year_id' => '34',
                'name' => 'Todas Las Pecas Del Mundo',
                'file' => 'http://127.0.0.1:8000/image/filmografia/pecas.jpg'
                ],
                [
                'year_id' => '34',
                'name' => 'No Manches Frida 2',
                'file' => 'http://127.0.0.1:8000/image/filmografia/frida.jpg'
                ],
                [
                'year_id' => '34',
                'name' => 'Nicky Jam',
                'file' => 'http://127.0.0.1:8000/image/filmografia/nick.jpg'
                ],
                [
                'year_id' => '34',
                'name' => 'Narcos',
                'file' => 'http://127.0.0.1:8000/image/filmografia/narcos.jpg'
                ],
                [
                'year_id' => '34',
                'name' => 'Sitiados',
                'file' => 'http://127.0.0.1:8000/image/filmografia/sitiados.jpg'
                ],
                [
                'year_id' => '34',
                'name' => 'Cria Puercos',
                'file' => 'http://127.0.0.1:8000/image/filmografia/pig.jpg'
                ],
                [
                'year_id' => '34',
                'name' => 'Destination Wedding',
                'file' => 'http://127.0.0.1:8000/image/filmografia/destiny.jpg'
                ],
                [

                'year_id' => '35',
                'name' => 'Detras De La Montaña',
                'file' => 'http://127.0.0.1:8000/image/filmografia/montana.jpg'
                ],
                [
                'year_id' => '35',
                'name' => 'Atrapada',
                'file' => 'http://127.0.0.1:8000/image/filmografia/atrapada.jpg'
                ],
                [
                'year_id' => '35',
                'name' => 'Destination Wedding',
                'file' => 'http://127.0.0.1:8000/image/filmografia/destiny.jpg'
                ],
                [

                'year_id' => '35',
                'name' => 'The Bachelor',
                'file' => 'http://127.0.0.1:8000/image/filmografia/bachelor.jpg'
                ],
                [

                'year_id' => '35',
                'name' => 'Sobrevivir',
                'file' => 'http://127.0.0.1:8000/image/filmografia/brev.jpg'
                ],
                [
                'year_id' => '35',
                'name' => 'Shark Tank Mèxico',
                'file' => 'http://127.0.0.1:8000/image/filmografia/shark.jpg'
                ],
                [
                'year_id' => '35',
                'name' => 'Segun Bibi',
                'file' => 'http://127.0.0.1:8000/image/filmografia/bibi.jpg'
                ],
                [
                'year_id' => '35',
                'name' => 'Rebelion Godinez',
                'file' => 'http://127.0.0.1:8000/image/filmografia/godin.jpg'
                ],
                [
                'year_id' => '35',
                'name' => 'Cria Puercos',
                'file' => 'http://127.0.0.1:8000/image/filmografia/pig.jpg'
                ],
                [
                'year_id' => '36',
                'name' => 'Cuando los hijos regresan',
                'file' => 'http://127.0.0.1:8000/image/filmografia/hijos.jpg'
                ],
                [
                'year_id' => '36',
                'name' => 'Con olor a guanajuato',
                'file' => 'http://127.0.0.1:8000/image/filmografia/gto.jpg'
                ],
                [
                'year_id' => '36',
                'name' => 'Consciencia',
                'file' => 'http://127.0.0.1:8000/image/filmografia/consciencia.jpg'
                ],
                [
                'year_id' => '36',
                'name' => 'Cria Puercos',
                'file' => 'http://127.0.0.1:8000/image/filmografia/pig.jpg'
                ],
                [
                'year_id' => '36',
                'name' => 'La Gran Promesa',
                'file' => 'http://127.0.0.1:8000/image/filmografia/promesa.jpg'
                ],
                [
                'year_id' => '36',
                'name' => 'La Noche De Franco',
                'file' => 'http://127.0.0.1:8000/image/filmografia/franco.jpg'
                ],
                [
                'year_id' => '36',
                'name' => 'Los Adioses',
                'file' => 'http://127.0.0.1:8000/image/filmografia/adioses.jpg'
                ],
                [
                'year_id' => '36',
                'name' => 'Cuando los hijos regresan',
                'file' => 'http://127.0.0.1:8000/image/filmografia/hijos.jpg'
                ],
                [
                'year_id' => '36',
                'name' => 'Shark Tank Mèxico',
                'file' => 'http://127.0.0.1:8000/image/filmografia/shark.jpg'
                ],
                

                 
    
        );

        Filmography::insert($post);
    }
}


