<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('changes', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained();


            $table->json('from');
            $table->json('to');

            $table->unsignedBigInteger('changeable_id');
            $table->string('changeable_type');

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
        Schema::dropIfExists('changes');
    }
}
