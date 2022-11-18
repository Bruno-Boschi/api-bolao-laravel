<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //


    public function getToken($email, $password)
    {



        $url = 'https://office.joinads.me/run/api/users/auth';
        $curl = curl_init();
        $body = [
            'email' => $email,
            'password' => $password,
        ];

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($body),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',

            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $response_decoded = json_decode($response);
        return $response_decoded;
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $user = User::where('email', $email)->first();
        $response = self::getToken($email, $password);
        $token = $response->user->token;

        if (!$user) {
            if ($response->status == false) {
                return response()->json([
                    'success' => false,
                    'message' => 'Erro ao logar',

                ], 401);
            }



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

            $newUser = new User();

            $newUser->name = $response_decoded->data->name;
            $newUser->email = $email;
            $newUser->password = Hash::make($password);
            $newUser->token = $token;
            $newUser->save();
            return response()->json([
                'success' => true,
                'message' => 'Logado Com sucesso',
                'token' => $token,
            ], 200);
        }

        if ($user->email === $email && (Hash::check($password, $user->password))) {
            $user->token = $token;
            $user->save();
            return response()->json([
                'success' => true,
                'message' => 'Logado com sucesso',
                'token' => $user->token,
            ], 200);
        }

        return response()->json([
            'success' => false,
            'message' => 'Verifique suas credenciais'
        ], 401);
    }
}
