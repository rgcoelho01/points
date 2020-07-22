<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GanheController extends Controller
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
        $aluno = DB::table('alunos')
            ->where('user_id', Auth::id())->first();
        $curso_id = $aluno->curso_id;
        
        // pega uma questão que começou e não finalizou
        $questao = DB::table('questoes')
        ->where([['ativo', '=', '1'],['curso_id', '=', $curso_id]])
        ->whereExists(function ($query) {
            $query->select(DB::raw(1))
                  ->from('respostas')
                  ->where([['resposta','=','0'],['user_id','=',Auth::id()]])
                  ->whereRaw('respostas.questoe_id = questoes.id');
        })
        ->first();
        if ($questao==null){
            //pega uma questao aleatoria que não viu e não respondeu
            $questao = DB::table('questoes')
            ->where([['ativo', '=', '1'],['curso_id', '=', $curso_id]])
            ->whereNotExists(function ($query) {
                $query->select(DB::raw(1))
                    ->from('respostas')
                    ->whereRaw('respostas.questoe_id = questoes.id');
                })
            ->inRandomOrder()
            ->first();
            if ($questao!=null){
                DB::table('respostas')->insert(
                    ['user_id' => Auth::id(), 'questoe_id' => $questao->id , 'disciplina_id' => $questao->disciplina_id ,'curso_id' => $curso_id, 'resposta' => 0, 'acertou' => '0', 'ativo' => '1' ]
                );
            }
        }
            return view('ganhe', ['questao' => $questao]);    
    }

    public function update(Request $request, $id)
    {
        $questao = DB::table('questoes')
            ->where([['ativo', '=', '1'],['id', $id]])->first();
        $correta = $questao->correta;
        $acertou =0;
        if ($correta==$request->alternativa){
            //insere 1 point para o aluno e 1 acerto
            DB::table('alunos')
                ->where('user_id',Auth::id())
                ->increment('pontos');
            DB::table('alunos')
                ->where('user_id',Auth::id())
                ->increment('acertos');
            $acertou=1;
        } else{
            DB::table('alunos')
                ->where('user_id',Auth::id())
                ->increment('erros');
            $acertou=0;
        }
        //update tabela respostas
        $affected = DB::table('respostas')
              ->where([['questoe_id', $id],['user_id',Auth::id()],['resposta','=','0']])
              ->update(['acertou'=>$acertou, 'resposta' => $request->alternativa]);
        return view('ganheresp',['questao'=>$questao, 'respondida'=>$request->alternativa]);
    }
}
