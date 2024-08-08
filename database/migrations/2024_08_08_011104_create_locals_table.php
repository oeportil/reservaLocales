<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalsTable extends Migration
{
    public function up()
    {
        Schema::create('locales', function (Blueprint $table) {
            $table->id('idLocal');
            $table->foreignId('idRegion')->constrained('regiones', 'idRegion');
            $table->foreignId('idAmenidad')->constrained('amenidades', 'idAmenidad');
            $table->string('nombre', 100);
            $table->string('municipio', 100);
            $table->string('direccion', 200);
            $table->text('referencias')->nullable();
            $table->text('descripcion')->nullable();
            $table->decimal('costoHora', 10, 2)->nullable();
            $table->decimal('precioRenta', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('locales');
    }
}
