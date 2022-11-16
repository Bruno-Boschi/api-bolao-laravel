<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Auth
{

    public function handle(Request $request, Closure $next)
    {

        $email = $request->header('email');
        $password = $request->header('password');
        // $token = $request->header('token');
        $user = User::where('email', $email)->first();

        if (!$user) {
            return response()->json([
                'message' => 'Invalid email'
            ], 401);
        }
        if (!Hash::check($password, $user->password)) {
            return response()->json([
                'message' => 'Invalid password'
            ], 401);
        }
        // if ($token == $user->token) {
        //     return response()->json([
        //         'message' => 'Invalid Token'
        //     ], 401);
        // }

        return $next($request);
    }
}
