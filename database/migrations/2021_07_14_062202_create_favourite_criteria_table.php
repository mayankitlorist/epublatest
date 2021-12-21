<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavouriteCriteriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favourite_criteria', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable(false)->unsigned();
            $table->bigInteger('brand_id')->nullable()->unsigned();
            $table->bigInteger('model_id')->nullable()->unsigned();
            $table->string('year')->nullable();
            $table->string('import')->nullable();
            $table->integer('price')->nullable();
            $table->string('mileage')->nullable();
            $table->bigInteger('cylinders_id')->nullable()->unsigned();
            $table->bigInteger('transmission_id')->nullable()->unsigned();
            $table->bigInteger('body_type_id')->nullable()->unsigned();
            $table->bigInteger('exterior_color_id')->nullable()->unsigned();
            $table->bigInteger('interior_color_id')->nullable()->unsigned();
            $table->string('description')->nullable();
            $table->string('vn_number')->nullable();
            $table->string('timely_maintenance')->default(0)->nullable();
            $table->string('approved_by_supplier')->default(0)->nullable();
            $table->string('status')->default(1);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favourite_criteria');
    }
}
