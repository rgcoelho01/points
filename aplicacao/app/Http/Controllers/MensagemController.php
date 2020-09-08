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
        $mensagens = DB::table('mensagens')
            ->join('users', 'users.id', '=', 'mensagens.de_user_id')
            ->where([['para_user_id', Auth::id()],['ativo','=','1']])
            ->select('mensagens.*', 'users.name')
            ->orderBy('id', 'desc')
            ->get();
        return view('mensagem', ['mensagens' => $mensagens]);
    }

    public function update(Request $request, $id){
    }

    public function delete(Request $request){
        $msgs = $request->delmsg;
        foreach ($msgs as $mensagem) {
            $questao = DB::table('mensagens')
                        ->where('id', '=', $mensagem)
                        ->update(['ativo' => '0']);
        }
        return($this->index());
        //return view('mensagem');
    }
}
