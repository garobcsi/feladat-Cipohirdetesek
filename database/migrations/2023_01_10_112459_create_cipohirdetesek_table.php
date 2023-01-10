<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cipohirdetesek', function (Blueprint $table) {
            $table->id('azon');
            $table->string('gyarto',12);
            $table->string('nev',12);
            $table->string('szin',12);
            $table->string('nem',12);
            $table->integer('meret');
            $table->integer('ar');
            $table->datetime('lejarat');
            $table->integer('aktiv');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cipohirdetesek');
    }
};
