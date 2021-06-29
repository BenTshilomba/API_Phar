<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvisStatistiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avis_statistiques', function (Blueprint $table) {
            $table->id();
            $table->string('TEL');
            $table->string('IDENTIFIANT');
            $table->string('CODE_AVIS');
            $table->string('JAIME');
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
        Schema::dropIfExists('avis_statistiques');
    }
}
