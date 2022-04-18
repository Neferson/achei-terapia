<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerapeutaTratamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terapeuta_tratamentos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('terapeuta_id')->constrained('terapeutas');
            $table->foreignId('tratamento_id')->constrained('tratamentos');
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
        Schema::dropIfExists('terapeuta_tratamentos');
    }
}
