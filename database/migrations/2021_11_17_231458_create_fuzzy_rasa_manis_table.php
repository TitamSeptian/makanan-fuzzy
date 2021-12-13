<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuzzyRasaManisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuzzy_rasa_manis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('makanan_id');
            $table->foreign('makanan_id')->references('id')->on('makanans');
            $table->float('tidak', 8, 2);
            $table->float('normal', 8, 2);
            $table->float('manis', 8, 2);
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
        Schema::dropIfExists('fuzzy_rasa_manis');
    }
}
