<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Contracts\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        if (Auth::user()->hasRole('administrador')){
            return redirect()->route('administrador');
        }
        $aluno = DB::table('alunos')
            ->where('user_id', Auth::id())->first();
        $curso_id = $aluno->curso_id;
        $top10 = DB::table('alunos')
            ->join('users', 'users.id', '=', 'alunos.user_id')
            ->where([['ativo', '=', '1'],['curso_id', '=', $curso_id]])
            ->orderByDesc('acertos')
            ->limit(10)
            ->get();
        
        $ranks = DB::table('alunos')
            ->where([['ativo', '=', '1'],['curso_id', '=', $curso_id]])
            ->orderByDesc('acertos')
            ->get();
            $i = 1;
            foreach ($ranks as $rank) {
                if($rank->user_id == Auth::id()){
                    $ranking = $i;
                }
                $i++;
            }

        $qt = DB::table('questoes')
            ->where([['ativo', '=', '1'],['curso_id', '=', $curso_id]])
            ->count();
        $qr = DB::table('respostas')
            ->where([['ativo', '=', '1'],['curso_id', '=', $curso_id],['user_id', '=', Auth::id()]])
            ->count();
        if($qt==0){
            $qp =0;
        } else {
            $qp = (int) ((100 * $qr) / $qt);
        }
        
           $progresso = (object)['qr'=>$qr,'qt'=>$qt,'qp'=>$qp];

        //return $this->sendData($cursos);
        return view('home', ['aluno' => $aluno, 'alunos' => $top10, 'ranking'=>$ranking, 'progresso'=>$progresso]);
    }

}
