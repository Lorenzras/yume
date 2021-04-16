<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKokyakusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kokyakus', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('tenpo', 50);
            $table->foreignId('tando_id')->references('id')->on('users');
            $table->string('tel', 15);
            $table->boolean('isBuyer');
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
        Schema::dropIfExists('kokyakus');
    }
}
