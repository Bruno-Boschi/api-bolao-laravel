<?php

namespace App\Http\Controllers\JogosGrupos;

use App\Http\Controllers\Controller;
use App\Models\JogoGrupo;
use App\Models\Palpite;
use App\Models\Ponto;
use App\Models\Ranking;
use Illuminate\Http\Request;

class JogoGruposController extends Controller
{

    public function all()
    {
        $jogos = JogoGrupo::leftJoin('times as TIME1', 'jogo_grupos.time1_id', '=', 'TIME1.id')
            ->leftJoin('times as TIME2', 'jogo_grupos.time2_id', '=', 'TIME2.id')
            ->select('jogo_grupos.*', 'TIME1.nome as time1_nome', 'TIME1.imgURL as time1_imgURL', 'TIME1.grupo as grupo', 'TIME2.nome as time2_nome', 'TIME2.imgURL as time2_imgURL')
            ->get();

        return $jogos;
    }


    public function update(Request $request, $id)
    {
        $jogo = JogoGrupo::where('jogo_grupos.id', $id)
            ->first();

        foreach ($request->all() as $key => $value) {
            $jogo->$key = $request->input($key);
        }
        $jogo->save();


        $palpites = Palpite::where('palpites.jogo_id', $id)->get();

        foreach ($palpites as $palpite) {

            $user_id = $palpite->user_id;
            $gols1 = $palpite->gols_time1;
            $gols2 = $palpite->gols_time2;

            if ($jogo->gols_time1 == $gols1) {
                $userResult1 = 500;
                $pontos = new Ponto();

                $pontos->user_id = $user_id;
                $pontos->pontos =  $userResult1;
                $pontos->jogo_id = $id;
                $pontos->ref = 'Acertou numero de gols do time 1';
            }

            if ($jogo->gols_time2 == $gols2) {
                $userResult2 = 500;

                $pontos = new Ponto();

                $pontos->user_id = $user_id;
                $pontos->pontos = $userResult2;
                $pontos->jogo_id = $id;
                $pontos->ref = 'Acertou numero de gols do time 2';
            }

            if ($jogo->gols_time1 == $gols1 && $jogo->gols_time2 == $gols2) {
                $userResult3 = 1000;

                $pontos = new Ponto();

                $pontos->user_id = $user_id;
                $pontos->pontos = $userResult3;
                $pontos->jogo_id = $id;
                $pontos->ref = 'Palpite de Empate , acerto';
            }
            if ($jogo->gols_time1 > $jogo->gols_time2)  $vencedorjogo = "time1";
            if ($jogo->gols_time2 > $jogo->gols_time1)  $vencedorjogo = "time2";
            if ($palpite->gols_time2 > $palpite->gols_time1)  $palpiteJogo = "time1";
            if ($palpite->gols_time2 > $palpite->gols_time1)  $palpiteJogo = "time2";

            if ($vencedorjogo == $palpiteJogo) {
                $userResultFinal = 1000;

                $pontos = new Ponto();

                $pontos->user_id = $user_id;
                $pontos->pontos = $userResultFinal;
                $pontos->jogo_id = $id;
                $pontos->ref = 'Palpite de vencedor , acerto';
            }

            $total = $userResult1 + $userResult2 + $userResult3 + $userResultFinal;
            $ranking = Ranking::where('ranking.user_id', $user_id)->first();

            if (!$ranking) {
                $ranking = new Ranking();
                $ranking->user_id = $user_id;
                $ranking->pontos = $total;
                $ranking->save();
            }

            $ranking->pontos = $total;
            $ranking->save();
        }




        return 'sucesso';
    }
}
