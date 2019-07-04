<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_en');
            $table->text('description_en')->nullable();
            $table->text('capacity_en')->nullable();
            $table->text('rated_speed_en')->nullable();
            $table->text('travel_height_en')->nullable();
            $table->text('meta_en')->nullable();

            $table->string('title_ar');
            $table->text('description_ar')->nullable();
            $table->text('capacity_ar')->nullable();
            $table->text('rated_speed_ar')->nullable();
            $table->text('travel_height_ar')->nullable();
            $table->text('meta_ar')->nullable();
            $table->integer('status')->default(1);
            $table->integer('added_by')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
