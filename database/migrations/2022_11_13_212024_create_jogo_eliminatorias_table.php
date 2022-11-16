<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJogoEliminatoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jogo_eliminatorias', function (Blueprint $table) {
            $table->id();
            $table->integer('time1_id');
            $table->integer('gols_time1');
            $table->integer('time2_id');
            $table->integer('gols_time2');
            $table->integer('fase'); // 1 oitavas , 2 quartas, 3 semis , 0 terceiro , 4 final
            $table->date('data');
            $table->time('hora');
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
        Schema::dropIfExists('jogo_eliminatorias');
    }
}
