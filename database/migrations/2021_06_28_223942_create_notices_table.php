<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notices', function (Blueprint $table) {
            $table->id();
            $table->string('CODE_NC');
            $table->string('NC');
            $table->string('FG');
            $table->string('DCI');
            $table->string('CT');
            $table->string('INDICATION');
            $table->string('CI');
            $table->string('DOSAGE');
            $table->string('EI');
            $table->string('IM');
            $table->string('PEC');
            $table->string('COMPOSITION');
            $table->string('FIRME');
            $table->string('COUT');
            $table->string('LIEU');
            $table->string('MA');
            $table->string('PRECAUTION');
            $table->string('ES');
            $table->string('AUTRES');
            $table->string('NOUVEAU');
            $table->string('PAYANT');
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
        Schema::dropIfExists('notices');
    }
}
