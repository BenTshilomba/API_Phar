<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tops', function (Blueprint $table) {
            $table->id();
            $table->string('IDENTIFIANT');
            $table->string('LOCK_MY');
            $table->string('TELEPHONE');
            $table->string('FONCTION');
            $table->string('SAUVEGARDE');
            $table->string('HOPITAL');
            $table->string('PROVINCE');
            $table->string('PAYS');
            $table->string('CNOM');
            $table->string('IMEI');
            $table->string('TOP');
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
        Schema::dropIfExists('tops');
    }
}
