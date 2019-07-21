<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlider extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('title_en')->nullable();
            $table->text('description_en')->nullable();
            $table->text('link_en')->nullable();

            $table->string('title_ar')->nullable();
            $table->text('description_ar')->nullable();
            $table->text('link_ar')->nullable();

            $table->text('image')->nullable();

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
        Schema::dropIfExists('slider');
    }
}
