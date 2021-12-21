<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMakanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('makanans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nama");
            $table->enum("jenis", ["tidak", "kuah"]);
            $table->integer("harga");
            $table->integer("mood");
            $table->integer("rasa_pedas");
            $table->integer("rasa_manis");
            $table->string("f_mood");
            $table->string("f_harga");
            $table->string("f_manis");
            $table->string("f_pedas");
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
        Schema::dropIfExists('makanans');
    }
}
