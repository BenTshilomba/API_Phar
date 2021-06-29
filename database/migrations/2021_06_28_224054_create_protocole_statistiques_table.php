<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProtocoleStatistiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('protocole_statistiques', function (Blueprint $table) {
            $table->id();
            $table->string('TEL');
            $table->string('IDENTIFIANT');
            $table->string('CODEP');
            $table->string('JAIME');
            $table->string('VUE');
            $table->string('FAVORIS');
            $table->string('ID_CODE');
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
        Schema::dropIfExists('protocole_statistiques');
    }
}
