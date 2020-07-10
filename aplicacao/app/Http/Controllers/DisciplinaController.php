<?php

namespace App\Http\Controllers;

use App\Disciplina;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function read()
    {
        $disciplinas = DB::table('disciplinas')->get();
        return $this->sendData($disciplinas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $res = Disciplina::create($request->all());
        if ($res) {
            return $this->sendSuccess("Disciplina cadastrada com sucesso!",$res->id);
        } else {
            return $this->sendError("Falha ao cadastrar Disciplina!");
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
     * @param  \App\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function show(Disciplina $disciplina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function edit(Disciplina $disciplina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $affected = DB::table('disciplinas')
            ->where('id', $id)
            ->update($request->all());
            if($affected){
                return $this->sendSuccess("Disciplina alterada com sucesso!");
            } else
            {
                return $this->sendError("Falha ao atualizar Disciplina",404);
            }
        } catch(Exception $e){
            return $this->sendError("Falha ao atualizar Disciplina: Faltam os parâmetros",404);
        }
            
    }

    public function delete($id){
        $disciplina = DB::table('disciplinas')->where('id', '=', $id)->delete();
        if($disciplina){
            return $this->sendSuccess("Disciplina excluída com sucesso!");
        } else
        {
            return $this->sendError("Falha ao excluir Disciplina",404);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disciplina $disciplina)
    {
        //
    }
}
