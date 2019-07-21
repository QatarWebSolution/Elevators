<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class About extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->text('whoweare_en')->nullable();
            $table->text('description_en')->nullable();
            $table->text('sidesection_en')->nullable();
            $table->text('meta_en')->nullable();

            $table->text('whoweare_ar')->nullable();
            $table->text('description_ar')->nullable();
            $table->text('sidesection_ar')->nullable();
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
        Schema::dropIfExists('about');
    }
}
