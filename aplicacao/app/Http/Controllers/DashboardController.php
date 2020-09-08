<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function read()
    {
        $aluno = DB::table('alunos')->where('user_id', Auth::id())->first();
        
        $top10 = DB::table('alunos')
            ->join('users', 'users.id', '=', 'alunos.user_id')
            ->where([['ativo', '=', '1'],['curso_id', '=', '1']])
            ->orderBy('acertos')
            ->limit(10)
            ->get();

        $ranking = 1;
        $sql = DB::table('alunos')
        ->where([['ativo', '=', '1'],['curso_id', '=', '1']])
        ->orderByDesc('acertos');
        dd($sql);
        foreach ($sql as $user) {
        }
        return view('dashboard', ['aluno' => $aluno, 'alunos' => $top10, 'ranking' => $ranking]);
    }
}
