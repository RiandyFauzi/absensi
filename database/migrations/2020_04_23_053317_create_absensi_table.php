<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Dzuhur');
            $table->string('Ashar');
            $table->string('Magrib');
            $table->string('Isya');
            $table->string('Subuh');
            $table->string('Dhuha');
            $table->string('Tahajud');
            $table->string('Tadarus');
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
        Schema::dropIfExists('absensi');
    }
}
