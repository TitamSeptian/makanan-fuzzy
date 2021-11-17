<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuzzyHargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuzzy_hargas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('makanan_id');
            $table->foreign('makanan_id')->references('id')->on('makanans');
            $table->float('murah', 8, 2);
            $table->float('normal', 8, 2);
            $table->float('mahal', 8, 2);
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
        Schema::dropIfExists('fuzzy_hargas');
    }
}
