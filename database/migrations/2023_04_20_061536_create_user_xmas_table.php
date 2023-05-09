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
        Schema::create('user_xmas', function (Blueprint $table) {
            $table->char('NIP')->primary();
            $table->string('name');
            $table->string('program');
            $table->string('phoneNumber');
            $table->string('password');
            $table->string('photo')->default('userDP.png');
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
        Schema::dropIfExists('user_xmas');
    }
};
