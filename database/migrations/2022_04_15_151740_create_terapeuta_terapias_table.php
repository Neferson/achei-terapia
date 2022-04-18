<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerapeutaTerapiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terapeuta_terapias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('terapeuta_id')->constrained('terapeutas');
            $table->foreignId('terapia_id')->constrained('terapias');
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
        Schema::dropIfExists('terapeuta_terapias');
    }
}
