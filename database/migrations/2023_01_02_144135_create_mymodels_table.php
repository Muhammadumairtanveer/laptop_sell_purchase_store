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
        Schema::create('mymodels', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('LName');
            $table->string('Lgeneration');
            $table->string('Pprice');
            $table->string('PImage');
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
        Schema::dropIfExists('mymodels');
    }
};
