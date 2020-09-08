<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Contracts\Role;

class AdministradorController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('administrador')){
            $ranks = DB::table('alunos')
                ->join('users', 'users.id', '=', 'alunos.user_id')
                ->orderByDesc('acertos')
                ->get();

        return view('administrador.home', ['ranks'=>$ranks]);
        }
    }

}
