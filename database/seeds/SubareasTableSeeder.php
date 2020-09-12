<?php

use Illuminate\Database\Seeder;
use App\Subarea;

class SubareasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Subarea = array (
            [

                 'classification_id' => '1',
                 'subclassification_id' => '1',
                'name' => '35MM',
                'slug' => '35mm'
            ],
            [

                 'classification_id' => '1',
                 'subclassification_id' => '1',
                'name' => '16MM',
                'slug' => '16mm'
            ],

            [

                 'classification_id' => '1',
                 'subclassification_id' => '2',
                'name' => 'ARRI',
                'slug' => 'arri'
            ],
            [

                'classification_id' => '1',
                'subclassification_id' => '2',
                'name' => 'SONY',
                'slug' => 'sony'
            ],
            [

                 'classification_id' => '1',
                 'subclassification_id' => '2',
                'name' => 'RED',
                'slug' => 'red'
            ],
            [

                 'classification_id' => '1',
                 'subclassification_id' => '2',
                'name' => 'PHANTOM',
                'slug' => 'phanton'
            ],
            [

                 'classification_id' => '1',
                 'subclassification_id' => '2',
                'name' => 'CANON',
                'slug' => 'canon'
            ],

            [

                 'classification_id' => '1',
                 'subclassification_id' => '2',
                'name' => 'PANASONIC',
                'slug' => 'panasonic'
            ],
            [

                 'classification_id' => '1',
                 'subclassification_id' => '2',
                'name' => 'BLACK MAGIC',
                'slug' => 'black-magic'
            ],
            [

                 'classification_id' => '1',
                 'subclassification_id' => '2',
                'name' => 'GOPRO',
                'slug' => 'go-pro'
            ],
            [

                 'classification_id' => '1',
                 'subclassification_id' => '2',
                'name' => 'DJI',
                'slug' => 'dji'
            ],
            [

                 'classification_id' => '1',
                 'subclassification_id' => '2',
                'name' => 'INSTA',
                'slug' => 'insta'
            ],

        );

        Subarea::insert($Subarea);
    }
}
