<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->string('id_purchase', 10)->index();
            $table->integer('id_transaction')->unsigned();
            $table->foreign('id_transaction')->references('id_transaction')->on('transactions');
            $table->integer('id_medicine')->unsigned();
            $table->foreign('id_medicine')->references('id_medicine')->on('medicines');
            $table->integer('qty');
            $table->integer('price');
            $table->string('alarm');
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
        Schema::dropIfExists('purchases');
    }
}
