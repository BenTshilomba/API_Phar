<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProtocolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('protocoles', function (Blueprint $table) {
            $table->id();
            $table->string('CODEP');
            $table->string('INTITULE');
            $table->string('CATEGORIE');
            $table->string('SERVICE');
            $table->string('ATTESTE_SELON');
            $table->string('ATTESTEUR');
            $table->string('HOPITAL_ATTESTEUR');
            $table->string('PROVINCE_ATTESTEUR');
            $table->string('TEL_ATTESTEUR');
            $table->string('DETAILS');
            $table->string('AUTRES_DETAIL');
            $table->string('DATE');
            $table->string('PAYS');
            $table->string('FONCTION');
            $table->string('VALIDATION');
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
        Schema::dropIfExists('protocoles');
    }
}
