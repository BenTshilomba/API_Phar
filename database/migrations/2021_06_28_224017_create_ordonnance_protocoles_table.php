<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdonnanceProtocolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordonnance_protocoles', function (Blueprint $table) {
            $table->id();
            $table->string('CODEP');
            $table->string('NC');
            $table->string('DCI');
            $table->string('FG');
            $table->string('DOSE');
            $table->string('DT');
            $table->string('POSOLOGIE');
            $table->string('VA');
            $table->string('DURE');
            $table->string('DUREE');
            $table->string('NOTE');
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
        Schema::dropIfExists('ordonnance_protocoles');
    }
}
