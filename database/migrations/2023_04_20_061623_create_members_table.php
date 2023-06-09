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
        Schema::create('members', function (Blueprint $table) {
            $table->increments('kdMember');
            $table->string('NIP');
            $table->unsignedInteger('kdExtracurricular');
            $table->unsignedInteger('kdState');
            $table->text('reason')->nullable();
            $table->timestamps();
            $table->foreign('NIP')
                ->references('NIP')->on('user_xmas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('kdExtracurricular')
                ->references('kdExtracurricular')->on('extracurriculars')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('kdState')
                ->references('kdState')->on('states')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }

};
