<?php

use Illuminate\Database\Seeder;

class WhereBuyLinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\WhereBuyLink::class,18)->create();
    }
}
