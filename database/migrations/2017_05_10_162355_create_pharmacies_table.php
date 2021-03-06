<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePharmaciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacies', function (Blueprint $table) {
            $table->increments('sia');
            $table->string('username', 25);
            $table->string('password', 25);
            $table->string('name', 25);
            $table->string('owner', 30);
            $table->string('address', 50);
            $table->string('phone', 20);
            $table->string('photo')->nullable();
            $table->string('info', 140);
            $table->string('operational', 50);
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
        Schema::dropIfExists('pharmacies');
    }
}
