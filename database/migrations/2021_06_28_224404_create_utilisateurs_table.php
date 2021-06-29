<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->string('LOCK');
            $table->string('TELEPHONE');
            $table->string('FONCTION');
            $table->string('SAUVEGARDE');
            $table->string('HOPITAL');
            $table->string('PROVINCE');
            $table->string('PAYS');
            $table->string('CNOM');
            $table->string('IMEI');
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
        Schema::dropIfExists('utilisateurs');
    }
}
