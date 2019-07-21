<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnquiry extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enquiry', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('company')->nullable();
            $table->text('meta')->nullable();
            $table->string('type')->default('quick');
            $table->integer('status')->default(1);
            $table->integer('added_by')->default(1);
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
        Schema::dropIfExists('enquiry');
    }
}
