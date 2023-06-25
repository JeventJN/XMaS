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
        Schema::create('presences', function (Blueprint $table) {
            $table->increments('kdPresence');
            $table->unsignedInteger('kdSchedule');
            $table->unsignedInteger('kdMember');
            $table->timestamps();
            $table->foreign('kdSchedule')
                ->references('kdSchedule')->on('schedules')->cascadeOnDelete()->cascadeOnUpdate();
                $table->foreign('kdMember')
                ->references('kdMember')->on('members')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presences');
    }
};
