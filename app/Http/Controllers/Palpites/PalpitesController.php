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

        $palpite = new Palpite;

        foreach ($request->all() as $key => $value) {
            $palpite->$key = $request->input($key);
        }
        $palpite->save();


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
