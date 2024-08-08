<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmenidadsTable extends Migration
{
    public function up()
    {
        Schema::create('amenidades', function (Blueprint $table) {
            $table->id('idAmenidad');
            $table->decimal('anchoMetros', 10, 2)->nullable();
            $table->decimal('largoMetros', 10, 2)->nullable();
            $table->decimal('extMetros', 10, 2)->nullable();
            $table->integer('noSillas')->nullable();
            $table->integer('noMesas')->nullable();
            $table->integer('noBaños')->nullable();
            $table->integer('noParques')->nullable();
            $table->integer('capacidadMax')->nullable();
            $table->text('otrasAmen')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('amenidades');
    }
}
