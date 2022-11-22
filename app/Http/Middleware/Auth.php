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

        // $email = $request->header('email');
        // $password = $request->header('password');
        $token = $request->header('Authorization');

        $url = 'https://office.joinads.me/run/api/users/data';
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'token: ' . $token,

            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $response_decoded = json_decode($response);

        if ($response_decoded->status == false) {
            return response()->json([
                'success' => false,
                'message' => 'Token invalido',
            ], 401);
        }


        $user = User::where('token', $token)->first();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Usuario Invalido',
            ], 401);
        }

        return $next($request);
    }
}
