<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGodelieveSecuritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('godelieve_securities', function (Blueprint $table) {
            $table->id();
            $table->string('EXPIRATION');
            $table->string('AVERTISSEMENT');
            $table->string('BLOCAGE');
            $table->string('BLASPHEME');
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
        Schema::dropIfExists('godelieve_securities');
    }
}
