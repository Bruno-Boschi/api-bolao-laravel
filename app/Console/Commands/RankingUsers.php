<?php

namespace App\Console\Commands;

use App\Models\JogoGrupo;
use App\Models\Palpite;
use App\Models\Ranking;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

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
        $rankings =  DB::select('select
    rankings.*,
DENSE_RANK() OVER (ORDER BY pontos DESC) rank
FROM rankings');

        foreach ($rankings as $ranking) {
            $user = User::where('users.id', $ranking->user_id)->first();

            $user->rank = $ranking->rank;
            $user->save();
        }
    }
}
