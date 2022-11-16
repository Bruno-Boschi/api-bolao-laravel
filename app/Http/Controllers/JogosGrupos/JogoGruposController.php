<?php

namespace App\Http\Controllers\JogosGrupos;

use App\Http\Controllers\Controller;
use App\Models\JogoGrupo;
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



        return 'sucesso';
    }
}
