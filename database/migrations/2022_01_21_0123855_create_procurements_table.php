<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcurementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procurements', function (Blueprint $table) {
            $table->id();

            $table->string('notes')->nullable();

            $table->string('status');

            $table->string('payment_status'); // from payment provider
            $table->string('payment_method');

            $table->foreignId('user_id')->constrained();
            $table->foreignId('seller_id')->constrained('users');

            $table->string('shipping_method');
            $table->string('shipping_status'); // from shipping provider
            $table->string('shipping_address');

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
        Schema::dropIfExists('procurements');
    }
}
