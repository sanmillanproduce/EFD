<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        //$this->call(ClassificationsTableSeeder::class);
        //$this->call(SubclassificationsTableSeeder::class);
        //$this->call(SubareasTableSeeder::class);
        //$this->call(WarehousesTableSeeder::class);
        //$this->call(YearsTableSeeder::class);
        $this->call(YearsTableSeeder::class);
        //$this->call(ProductTableSeeder::class);
        $this->call(FilmographiesTableSeeder::class);




    }
}
