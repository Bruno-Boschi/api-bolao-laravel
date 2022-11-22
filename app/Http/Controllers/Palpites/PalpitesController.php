<?php

namespace App\Http\Controllers\Palpites;

use App\Http\Controllers\Controller;
use App\Models\Palpite;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PalpitesController extends Controller
{

    public function allFaseGrupo(Request $request)
    {
        $token = $request->header('Authorization');
        $user = User::where('token', $token)->first();
        $palpites = Palpite::where('palpites.user_id', '=', $user->id)
            ->where('palpites.fase', '=', 1)
            ->get();

        return $palpites;
    }

    public function allEliminatorias(Request $request)
    {
        $token = $request->header('Authorization');
        $user = User::where('token', $token)->first();
        $palpites = Palpite::where('palpites.user_id', '=', $user->id)
            ->where('palpites.fase', '=', 2)
            ->get();

        return $palpites;
    }


    public function create(Request $request)
    {

        $jogos = json_encode($request->all());
        $token = $request->header('Authorization');
        $user = User::where('token', $token)->first();
        $jogos_decoded = json_decode($jogos);

        foreach ($jogos_decoded as $jogo) {

            $palpite = Palpite::where('palpites.jogo_id', $jogo->jogo_id)
                ->where('palpites.user_id', $user->id)
                ->first();

            if ($palpite) {
                $palpite->gols_time1 = $jogo->gols_time1;
                $palpite->gols_time2 = $jogo->gols_time2;
                $palpite->fase = ($jogo->fase ? $jogo->fase : 1);
                $palpite->save();
            } else {
                $palpite = new Palpite;

                $palpite->user_id = $user->id;
                $palpite->jogo_id = $jogo->id;
                $palpite->gols_time1 = $jogo->gols_time1;
                $palpite->gols_time2 = $jogo->gols_time2;
                $palpite->fase = ($jogo->fase ? $jogo->fase : 1);
                $palpite->save();
            }
        }


        return 'sucesso';
    }



    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
