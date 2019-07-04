<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_en');
            $table->string('elevator_type_en')->nullable();
            $table->string('building_type_en')->nullable();
            $table->string('project_location_en')->nullable();
            $table->string('start_date_en')->nullable();
            $table->string('handover_date_en')->nullable();
            $table->string('project_status_en')->nullable();
            $table->text('description_en')->nullable();
            $table->text('meta_en')->nullable();

            $table->string('title_ar');
            $table->string('elevator_type_ar')->nullable();
            $table->string('building_type_ar')->nullable();
            $table->string('project_location_ar')->nullable();
            $table->string('start_date_ar')->nullable();
            $table->string('handover_date_ar')->nullable();
            $table->string('project_status_ar')->nullable();
            $table->text('description_ar')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
