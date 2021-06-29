<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eis', function (Blueprint $table) {
            $table->id();
            $table->string('NC');
            $table->string('DCI');
            $table->string('CT');
            $table->string('FIRME');
            $table->string('DETAILS_EI');
            $table->string('QUANTITE');
            $table->string('ATTITUDE');
            $table->string('URGENCE');
            $table->string('CATEGORIE');
            $table->string('ADRESSE');
            $table->string('DATE');
            $table->string('IDENTIFIANT');
            $table->string('TEL');
            $table->string('HOPITAL');
            $table->string('CODE_EI');
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
        Schema::dropIfExists('eis');
    }
}
