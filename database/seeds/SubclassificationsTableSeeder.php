<?php

use Illuminate\Database\Seeder;
use App\Subclassification;

class SubclassificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Subclassifications = array (
            [
                'classification_id' => '1',
                'name' => 'CINE',
                'slug' => 'cine'
            ],
            [

                'classification_id' => '1',
                'name' => 'DIGITAL',
                'slug' => 'digital'
            ],

            [

                'classification_id' => '2',
                'name' => 'PRIMARIOS',
                'slug' => 'primarios'
            ],
            [

                'classification_id' => '2',
                'name' => 'ANAMÓRFICOS',
                'slug' => 'anamorficos'
            ],
            [

                'classification_id' => '2',
                'name' => 'FULL FRAME',
                'slug' => 'full-frame'
            ],
            [

                'classification_id' => '2',
                'name' => 'ZOOM',
                'slug' => 'zoom'
            ],
            [

                'classification_id' => '2',
                'name' => 'ESPECIALES',
                'slug' => 'especiales'
            ],

            [

                'classification_id' => '3',
                'name' => 'ACCESORIOS',
                'slug' => 'accesorios'
            ],
            [

                'classification_id' => '3',
                'name' => 'FILTROS',
                'slug' => 'filtros'
            ],

            [

                'classification_id' => '4',
                'name' => 'LED',
                'slug' => 'led'
            ],
            [

                'classification_id' => '4',
                'name' => 'HMI',
                'slug' => 'hmi'
            ],
            [

                'classification_id' => '4',
                'name' => 'TUNGSTENO',
                'slug' => 'tungsteno'
            ],
            [

                'classification_id' => '4',
                'name' => 'TEXTILES',
                'slug' => 'textiles'
            ],
            [

                'classification_id' => '4',
                'name' => 'TRAMOYA',
                'slug' => 'tramoya'
            ],
            [

                'classification_id' => '4',
                'name' => 'ELÉCTRICO',
                'slug' => 'electrico'
            ],

            [

                'classification_id' => '5',
                'name' => 'MÓVILES',
                'slug' => 'moviles'
            ],
            [

                'classification_id' => '5',
                'name' => 'PLANTAS',
                'slug' => 'plantas'
            ],

            [

                'classification_id' => '6',
                'name' => 'GRÚAS',
                'slug' => 'gruas'
            ],
            [

                'classification_id' => '6',
                'name' => 'DOLLIES',
                'slug' => 'dollies'
            ],
            [

                'classification_id' => '6',
                'name' => 'CABEZAS REMOTAS',
                'slug' => 'cabezas-remotas'
            ],


        );

        Subclassification::insert($Subclassifications);
    }
}
