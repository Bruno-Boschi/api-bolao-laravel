<?php

namespace App\Http\Controllers\Palpites;

use App\Http\Controllers\Controller;
use App\Models\Palpite;
use Illuminate\Http\Request;

class PalpitesController extends Controller
{

    public function allFaseGrupo()
    {
        $palpites = Palpite::where('palpites.user_id', '=', 2)
            ->where('palpites.fase', '=', 1)
            ->get();

        return $palpites;
    }

    public function allEliminatorias()
    {
        $palpites = Palpite::where('palpites.user_id', '=', 2)
            ->where('palpites.fase', '=', 2)
            ->get();

        return $palpites;
    }


    public function create(Request $request)
    {

        $jogos = $request->all();
        $usuario_id = Auth::user()->id;

        foreach ($jogos as $jogo) {
            $palpite = Palpite::where($jogo->id, '=', 'palpites.jogo_id')
                ->where($usuario_id . '=', 'palpites.user_id')
                ->get();
            if (isset($palpite)) {
                $palpite->gols_time1 = $jogo->gols_time1;
                $palpite->gols_time2 = $jogo->gols_time2;
                $palpite->save();
            } else {
                $palpite = new Palpite;

                $palpite->user_id = $usuario_id;
                $palpite->jogo_id = $jogo->jogo_id;
                $palpite->gols_time1 = $jogo->gols_time1;
                $palpite->gols_time2 = $jogo->gols_time2;
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
