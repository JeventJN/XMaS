<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('kdSchedule');
            $table->unsignedInteger('kdExtracurricular');
            $table->date('date');
            $table->time('timeStart');
            $table->time('timeEnd');
            $table->string('location');
            $table->text('activity');
            $table->timestamps();
            $table->foreign('kdExtracurricular')
                ->references('kdExtracurricular')->on('extracurriculars')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
};
