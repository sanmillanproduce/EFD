<?php

use Illuminate\Database\Seeder;
use App\Warehouse;

class WarehousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Warehouse = array (
            [

                'name' => 'MÉXICO',
                'slug' => 'mexico'
            ],
            [

                'name' => 'COLOMBIA',
                'slug' => 'colombia'
            ],

            [

                'name' => 'USA',
                'slug' => 'usa'
            ],
            [

                'name' => 'ALEMANIA',
                'slug' => 'alemania'
            ],
            [


                'name' => 'ESPAÑA',
                'slug' => 'espana'
            ],

        );

        Warehouse::insert($Warehouse);
    }
}
