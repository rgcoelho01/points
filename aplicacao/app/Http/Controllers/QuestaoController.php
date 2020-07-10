<?php

namespace App\Http\Controllers;

use App\Questao;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestaoController extends Controller
{
    /**
     * Display a listing of the all resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function read()
    {
        $questoes = DB::table('questoes')->get();
        return $this->sendData($questoes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $res = Questao::create($request->all());
        if ($res) {
            return $this->sendSuccess("Questao cadastrada com sucesso!",$res->id);
        } else {
            return $this->sendError("Falha ao cadastrar Questão!");
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Questao  $questao
     * @return \Illuminate\Http\Response
     */
    public function show(Questao $questao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Questao  $questao
     * @return \Illuminate\Http\Response
     */
    public function edit(Questao $questao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Questao  $questao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $affected = DB::table('questoes')
            ->where('id', $id)
            ->update($request->all());
            if($affected){
                return $this->sendSuccess("Questão alterada com sucesso!");
            } else
            {
                return $this->sendError("Falha ao atualizar Questão",404);
            }
        } catch(Exception $e){
            return $this->sendError("Falha ao atualizar Questão: Faltam os parâmetros",404);
        }
            
    }

    public function delete($id){
        $questao = DB::table('questoes')->where('id', '=', $id)->delete();
        if($questao){
            return $this->sendSuccess("Questão excluída com sucesso!");
        } else
        {
            return $this->sendError("Falha ao excluir Questão",404);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Questao  $questao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Questao $questao)
    {
        //
    }
}
