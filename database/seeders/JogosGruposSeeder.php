<?php

namespace Database\Seeders;

use App\Models\JogoGrupo;
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
            'time1_id' => 1, // Catar
            'gols_time1' => 0,
            'time2_id' => 2, // Equador
            'gols_time2' => 0,
            'data' => '2022-11-20',
            'hora' => '13:00',
        ]);

        JogoGrupo::create([
            'time1_id' => 5, // Inglaterra
            'gols_time1' => 0,
            'time2_id' => 6, // Ira
            'gols_time2' => 0,
            'data' => '2022-11-21',
            'hora' => '10:00',
        ]);

        JogoGrupo::create([
            'time1_id' => 3,  // Senegal
            'gols_time1' => 0,
            'time2_id' => 4, // Holanda
            'gols_time2' => 0,
            'data' => '2022-11-21',
            'hora' => '13:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 7,  // Estados Unidos
            'gols_time1' => 0,
            'time2_id' => 8, // Gales
            'gols_time2' => 0,
            'data' => '2022-11-21',
            'hora' => '16:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 9, // Argentina
            'gols_time1' => 0,
            'time2_id' => 10, // Arábia Saudita
            'gols_time2' => 0,
            'data' => '2022-11-22',
            'hora' => '07:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 13,  //Dinamarca
            'gols_time1' => 0,
            'time2_id' => 14, //Tunisia
            'gols_time2' => 0,
            'data' => '2022-11-22',
            'hora' => '10:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 11, //Mexico
            'gols_time1' => 0,
            'time2_id' => 12,  //Polonia
            'gols_time2' => 0,
            'data' => '2022-11-22',
            'hora' => '13:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 15, // França
            'gols_time1' => 0,
            'time2_id' => 16, // Autralia
            'gols_time2' => 0,
            'data' => '2022-11-22',
            'hora' => '16:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 21, //Marrocos
            'gols_time1' => 0,
            'time2_id' => 22,  // Croacia
            'gols_time2' => 0,
            'data' => '2022-11-23',
            'hora' => '07:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 17, //alemanha
            'gols_time1' => 0,
            'time2_id' => 18, // japao
            'gols_time2' => 0,
            'data' => '2022-11-23',
            'hora' => '10:00',
        ]);

        JogoGrupo::create([
            'time1_id' => 19, //Espanha
            'gols_time1' => 0,
            'time2_id' => 20, // Costa Rica
            'gols_time2' => 0,
            'data' => '2022-11-23',
            'hora' => '13:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 23, // Belgica
            'gols_time1' => 0,
            'time2_id' => 24, // Canada
            'gols_time2' => 0,
            'data' => '2022-11-23',
            'hora' => '16:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 25, //Suiça
            'gols_time1' => 0,
            'time2_id' => 26, // Camaroes
            'gols_time2' => 0,
            'data' => '2022-11-24',
            'hora' => '07:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 29, //Uruguai
            'gols_time1' => 0,
            'time2_id' => 30, // Coreia do sul
            'gols_time2' => 0,
            'data' => '2022-11-24',
            'hora' => '10:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 31, // Portugal
            'gols_time1' => 0,
            'time2_id' => 32, // Gana
            'gols_time2' => 0,
            'data' => '2022-11-24',
            'hora' => '13:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 28, //Brasil
            'gols_time1' => 0,
            'time2_id' => 29, //Servia
            'gols_time2' => 0,
            'data' => '2022-11-24',
            'hora' => '16:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 8, // Gales
            'gols_time1' => 0,
            'time2_id' => 6, // Irã
            'gols_time2' => 0,
            'data' => '2022-11-25',
            'hora' => '07:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 1, //Catar
            'gols_time1' => 0,
            'time2_id' => 3, //Senegal
            'gols_time2' => 0,
            'data' => '2022-11-25',
            'hora' => '10:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 4, //Holanda
            'gols_time1' => 0,
            'time2_id' => 2, //Equador
            'gols_time2' => 0,
            'data' => '2022-11-25',
            'hora' => '13:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 5, //Inglaterra
            'gols_time1' => 0,
            'time2_id' => 7, // Estados Unidos
            'gols_time2' => 0,
            'data' => '2022-11-25',
            'hora' => '16:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 14, //Tunísia
            'gols_time1' => 0,
            'time2_id' => 16, // Austrália
            'gols_time2' => 0,
            'data' => '2022-11-26',
            'hora' => '07:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 12, //Polônia
            'gols_time1' => 0,
            'time2_id' => 10, //Arábia Saudita
            'gols_time2' => 0,
            'data' => '2022-11-26',
            'hora' => '10:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 15, // França
            'gols_time1' => 0,
            'time2_id' => 13, //Dinamarca
            'gols_time2' => 0,
            'data' => '2022-11-26',
            'hora' => '13:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 9, // Argentina
            'gols_time1' => 0,
            'time2_id' => 11, // México
            'gols_time2' => 0,
            'data' => '2022-11-26',
            'hora' => '16:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 18, // Japão
            'gols_time1' => 0,
            'time2_id' => 20, // Costa Rica
            'gols_time2' => 0,
            'data' => '2022-11-27',
            'hora' => '07:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 23, // Bélgica
            'gols_time1' => 0,
            'time2_id' => 21, // Marrocos
            'gols_time2' => 0,
            'data' => '2022-11-27',
            'hora' => '10:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 22, // Croácia
            'gols_time1' => 0,
            'time2_id' => 24, // Canadá
            'gols_time2' => 0,
            'data' => '2022-11-27',
            'hora' => '13:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 19, // Espanha
            'gols_time1' => 0,
            'time2_id' => 17, // Alemanha
            'gols_time2' => 0,
            'data' => '2022-11-27',
            'hora' => '16:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 26, // Camarões
            'gols_time1' => 0,
            'time2_id' => 28, //  Sérvia
            'gols_time2' => 0,
            'data' => '2022-11-28',
            'hora' => '07:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 30, // Coreia do Sul
            'gols_time1' => 0,
            'time2_id' => 32, // Gana
            'gols_time2' => 0,
            'data' => '2022-11-28',
            'hora' => '10:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 27, // Brasil
            'gols_time1' => 0,
            'time2_id' => 25, // Suíça
            'gols_time2' => 0,
            'data' => '2022-11-28',
            'hora' => '13:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 31, // Portugal
            'gols_time1' => 0,
            'time2_id' => 29, // Uruguai
            'gols_time2' => 0,
            'data' => '2022-11-28',
            'hora' => '16:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 2, // Equador
            'gols_time1' => 0,
            'time2_id' => 3, // Senegal
            'gols_time2' => 0,
            'data' => '2022-11-29',
            'hora' => '12:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 4, // Holanda
            'gols_time1' => 0,
            'time2_id' => 1, // Catar
            'gols_time2' => 0,
            'data' => '2022-11-29',
            'hora' => '12:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 7, //Irã
            'gols_time1' => 0,
            'time2_id' => 6, //Estados Unidos
            'gols_time2' => 0,
            'data' => '2022-11-29',
            'hora' => '16:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 8, //Gales
            'gols_time1' => 0,
            'time2_id' => 5, // Inglaterra
            'gols_time2' => 0,
            'data' => '2022-11-29',
            'hora' => '16:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 14, //Tunísia
            'gols_time1' => 0,
            'time2_id' => 15, // França
            'gols_time2' => 0,
            'data' => '2022-11-30',
            'hora' => '12:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 16, //Austrália
            'gols_time1' => 0,
            'time2_id' => 13, //Dinamarca
            'gols_time2' => 0,
            'data' => '2022-11-30',
            'hora' => '12:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 12, // Polônia
            'gols_time1' => 0,
            'time2_id' => 10, // Argentina
            'gols_time2' => 0,
            'data' => '2022-11-30',
            'hora' => '16:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 10, // Arábia Saudita
            'gols_time1' => 0,
            'time2_id' => 11, // México
            'gols_time2' => 0,
            'data' => '2022-11-30',
            'hora' => '16:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 22, // Croácia
            'gols_time1' => 0,
            'time2_id' => 23, // Bélgica
            'gols_time2' => 0,
            'data' => '2022-12-01',
            'hora' => '12:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 24, // Canadá
            'gols_time1' => 0,
            'time2_id' => 21, // Marrocos
            'gols_time2' => 0,
            'data' => '2022-12-01',
            'hora' => '12:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 18, // Japão
            'gols_time1' => 0,
            'time2_id' => 19, // Espanha
            'gols_time2' => 0,
            'data' => '2022-12-01',
            'hora' => '16:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 20, // Costa Rica
            'gols_time1' => 0,
            'time2_id' => 17, // Alemanha
            'gols_time2' => 0,
            'data' => '2022-12-01',
            'hora' => '16:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 30, // Coreia do Sul
            'gols_time1' => 0,
            'time2_id' => 31, //  Portugal
            'gols_time2' => 0,
            'data' => '2022-12-02',
            'hora' => '12:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 32, // Gana
            'gols_time1' => 0,
            'time2_id' => 29, // Uruguai
            'gols_time2' => 0,
            'data' => '2022-12-02',
            'hora' => '12:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 28, // Sérvia
            'gols_time1' => 0,
            'time2_id' => 25, // Suíça
            'gols_time2' => 0,
            'data' => '2022-12-02',
            'hora' => '16:00 ',
        ]);

        JogoGrupo::create([
            'time1_id' => 26, // Camarões
            'gols_time1' => 0,
            'time2_id' => 27, // Brasil
            'gols_time2' => 0,
            'data' => '2022-12-02',
            'hora' => '16:00 ',
        ]);
    }
}
