<?php

namespace App\Http\Controllers\Pontos;

use App\Http\Controllers\Controller;
use App\Models\UserPonto;
use Illuminate\Http\Request;

class PontosController extends Controller
{

    public function all()
    {
        //

        $pontos = UserPonto::all();

        return $pontos;
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
