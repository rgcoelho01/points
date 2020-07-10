<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{

    public function login(Request $request)
    {   //tenta logar no sistema, se não conseguir loga no suap e cria um usuario no sistema
        $request->validate([
            'cpf' => 'required',
            'password' => 'required'
        ]);
        
        $user = User::where('cpf', $request->cpf)->first();
    
        if (! $user || ! Hash::check($request->password, $user->password)) {
            $response = Http::post('https://suap.uenp.edu.br/api/v2/autenticacao/token/',[
                'username' => $request->cpf,
                'password' => $request->password
            ]);
            $json_str = $response->json();
            $obj = json_encode($json_str);
            $obj1 = json_decode($obj);
            if(isset($obj1->token)){
                $user = User::create([
                    'cpf' => $request->cpf,
                    'password' => Hash::make($request->password),
                ]);
            } else 
            {
                return $this->sendError("Usuário ou senha inválidos");
            }
        }
        return $this->sendSuccess("Usuário autenticado com sucesso", $user->createToken($request->cpf)->plainTextToken);
    }
}
