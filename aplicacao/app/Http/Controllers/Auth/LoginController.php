<?php

namespace App\Http\Controllers\Auth;

use App\Aluno;
use App\User;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'cpf';
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }
        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        } else{

            $credentials = $request->only('cpf', 'password');
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
                $user->assignRole('aluno');
                $aluno = Aluno::Create([
                    'user_id' => $user->id,
                    'curso_id' => 1,
                    'acertos' => 0,
                    'erros' => 0,
                    'pontos' => 0,
                    'ativo' => 1
                ]);
                //TODO ->Cadastrar o curso do aluno
                if ($this->attemptLogin($request)) {
                    return $this->sendLoginResponse($request);
                }
            }
        }
        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);
        return $this->sendFailedLoginResponse($request);        
    }

    
}
