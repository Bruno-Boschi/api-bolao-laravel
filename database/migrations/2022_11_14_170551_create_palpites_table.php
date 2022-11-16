<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePalpitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('palpites', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('jogo_id');
            $table->integer('fase'); // 1 fase de grupo , 2 fase eliminatorias
            $table->integer('gols_time1')->default(0);
            $table->integer('gols_time2')->default(0);
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
        Schema::dropIfExists('palpites');
    }
}
