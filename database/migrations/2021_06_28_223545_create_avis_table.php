<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avis', function (Blueprint $table) {
            $table->id();
            $table->string('IDENTIFIANT');
            $table->string('HOPITAL');
            $table->string('PROVINCE');
            $table->string('DATE_SEND');
            $table->string('TIME_AVIS');
            $table->string('AVIS');
            $table->string('CODEP');
            $table->string('TEL');
            $table->string('CODE_AVIS');
            $table->string('PAYS');
            $table->string('FONCTION');
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
        Schema::dropIfExists('avis');
    }
}
