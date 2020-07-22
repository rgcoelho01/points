<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MensagemController extends Controller
{
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
        $mensagens = DB::table('users')
        ->where('id', Auth::id())->first();
        return view('mensagem', ['mensagens' => $mensagens]); 

    }

    public function update(Request $request, $id){
        $affected = DB::table('users')
            ->where('id', $id)
            ->update(['name' => $request->becontactname , 'email' => $request->becontactemail]);
        $user = DB::table('users')
            ->where('id', Auth::id())->first();
        return view('perfil', ['user' => $user]); 
    }
}
