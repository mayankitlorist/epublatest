<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExteriorColorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exterior_color', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('car_models_id')->unsigned();
            $table->string('ext_color');
            $table->string('status')->default('1');
            $table->timestamps();
            $table->foreign('car_models_id')->references('id')->on('car_models')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exterior_color');
    }
}
