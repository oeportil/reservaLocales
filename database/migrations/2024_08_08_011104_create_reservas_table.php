<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id('idReserva');
            $table->foreignId('idLocal')->constrained('locales', 'idLocal');
            $table->foreignId('idUser')->constrained('users');
            $table->decimal('total', 10, 2);
            $table->boolean('cancelada')->default(false);
            $table->dateTime('fechaInicio');
            $table->dateTime('fechaFin');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
