<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Ranking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    //
    public function one(Request $request)
    {
        $token = $request->header('Authorization');
        $user = User::where('token', $token)
            ->leftJoin('rankings', 'rankings.user_id', '=', 'users.id')
            ->select('users.name', 'users.rank', 'rankings.pontos as pontos')
            ->first();

        return $user;
    }
}
