<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticeStatistiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notice_statistiques', function (Blueprint $table) {
            $table->id();
            $table->string('TEL');
            $table->string('IDENTIFIANT');
            $table->string('CODE_NC');
            $table->string('NC');
            $table->string('DCI');
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
        Schema::dropIfExists('notice_statistiques');
    }
}
