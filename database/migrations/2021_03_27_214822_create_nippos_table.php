<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNipposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nippos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('generated_at');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->integer('interview')->default(0);
            $table->integer('assistance')->default(0);
            $table->integer('purchase')->default(0);
            $table->integer('contract')->default(0);
            $table->integer('settlement')->default(0);
            $table->integer('intermediary')->default(0);
            $table->integer('distribution')->default(0);
            $table->integer('roller')->default(0);
            $table->integer('buy')->default(0);
            $table->integer('sell')->default(0);
            $table->decimal('brokerage', 10, 2)->default(0);
            $table->decimal('loan', 15, 2)->default(0);
            $table->decimal('fine', 15, 2)->default(0);
            $table->decimal('fire_insurance', 5, 2)->default(0);
            $table->decimal('reform',15, 2)->default(0);
            $table->decimal('solar_panel', 15, 2)->default(0);
            $table->text('achievements')->nullable();
            $table->text('failures')->nullable();
            $table->text('learnings')->nullable();
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
        Schema::dropIfExists('nippos');
    }
}
