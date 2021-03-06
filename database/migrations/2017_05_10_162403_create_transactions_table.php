<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id_transaction');
            $table->integer('sia')->unsigned();
            $table->foreign('sia')->references('sia')->on('pharmacies');
            $table->integer('sip')->unsigned();
            $table->foreign('sip')->references('sip')->on('doctors');
            $table->date('time');
            $table->integer('price');
            $table->integer('verification');
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
        Schema::dropIfExists('transactions');
    }
}
