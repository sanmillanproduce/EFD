<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmographiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filmographies', function (Blueprint $table) {
            $table->increments('id');

            $table->integer ('year_id')                     ->unsigned();

            $table->string  ('name', 128)                   ->nullable();
            $table->string  ('slug', 128)                   ->unique()->nullable();
            $table->string  ('file')                        ->nullable();

            $table->foreign ('year_id')                     ->references('id')->on('years');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filmographies');
    }
}
