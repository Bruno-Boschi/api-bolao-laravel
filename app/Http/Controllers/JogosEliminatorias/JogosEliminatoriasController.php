<?php

namespace App\Http\Controllers\JogosEliminatorias;

use App\Http\Controllers\Controller;
use App\Models\JogoEliminatoria;
use Illuminate\Http\Request;

class JogosEliminatoriasController extends Controller
{

    public function all()
    {
        $jogos = JogoEliminatoria::leftJoin('times as TIME1', 'jogo_eliminatorias.time1_id', '=', 'TIME1.id')
            ->leftJoin('times as TIME2', 'jogo_eliminatorias.time2_id', '=', 'TIME2.id')
            ->select('jogo_eliminatorias.*', 'TIME1.nome as time1_nome', 'TIME1.imgURL as time1_imgURL',  'TIME2.nome as time2_nome', 'TIME2.imgURL as time2_imgURL')
            ->get();

        return $jogos;
    }


    public function create()
    {
        //
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
