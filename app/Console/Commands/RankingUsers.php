<?php

namespace App\Console\Commands;

use App\Models\JogoGrupo;
use App\Models\Palpite;
use Carbon\Carbon;
use Illuminate\Console\Command;

class RankingUsers extends Command
{

    protected $signature = 'ranking';
    protected $description = 'Ranking';


    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {

        $palpites = Palpite::all();
        $datanow = Carbon::now()->format('Y-m-d');
        $horanow = Carbon::now()->addHour(2)->format('H:m');

        echo $horanow;



        foreach ($palpites as $palpite) {
            $jogo = JogoGrupo::where($palpite->jogo_id, '=', 'id')->get();
        }
    }
}
