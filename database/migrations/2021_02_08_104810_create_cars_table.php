<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable(false)->unsigned();
            $table->bigInteger('brand_id')->nullable(false)->unsigned();
            $table->bigInteger('model_id')->nullable(false)->unsigned();
            $table->string('year')->nullable(false);
            $table->string('import')->nullable(false);
            $table->integer('price')->nullable(false);
            $table->string('mileage')->nullable(false);
            $table->bigInteger('cylinders_id')->nullable(false)->unsigned();
            $table->bigInteger('transmission_id')->nullable(false)->unsigned();
            $table->bigInteger('body_type_id')->nullable(false)->unsigned();
            $table->bigInteger('exterior_color_id')->nullable(false)->unsigned();
            $table->bigInteger('interior_color_id')->nullable(false)->unsigned();
            $table->string('description')->nullable(false);
            $table->string('status')->default(1);

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('car_brand')->onDelete('cascade');
            $table->foreign('model_id')->references('id')->on('car_models')->onDelete('cascade');
            $table->foreign('cylinders_id')->references('id')->on('cylinders')->onDelete('cascade');
            $table->foreign('transmission_id')->references('id')->on('transmission')->onDelete('cascade');
            $table->foreign('body_type_id')->references('id')->on('car_body')->onDelete('cascade');
            $table->foreign('exterior_color_id')->references('id')->on('exterior_color')->onDelete('cascade');
            $table->foreign('interior_color_id')->references('id')->on('interior_color')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
