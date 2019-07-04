<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('file');
            $table->text('thumb_250');
            $table->text('thumb_500');
            $table->string('type')->nullable();
            $table->integer('project_id');
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
        Schema::dropIfExists('projects_images');
    }
}
