<?php

namespace Database\Seeders;

use App\Models\Models\JogoGrupo;
use Illuminate\Database\Seeder;

class JogosGruposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JogoGrupo::create([
            'selecao1_id' => 1,
            'gols_selecao1' => 0,
            'selecao2_id' => 2,
            'gols_selecao2' => 0,
            'data' => '2022-11-20',
            'hora' => '13:00 ',
        ]);
        JogoGrupo::create([
            'selecao1_id' => 3,
            'gols_selecao1' => 0,
            'selecao2_id' => 4,
            'gols_selecao2' => 0,
            'data' => '2022-11-20',
            'hora' => '13:00 ',
        ]);
    }
}
