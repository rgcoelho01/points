<?php

namespace App\Http\Controllers;

use App\Curso;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CursoController extends Controller
{
    /**
     * Display a listing of the all resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function read()
    {
        $cursos = DB::table('cursos')->get();
        return $this->sendData($cursos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $res = Curso::create($request->all());
        if ($res) {
            return $this->sendSuccess("Curso cadastrado com sucesso!",$res->id);
        } else {
            return $this->sendError("Falha ao cadastrar Curso!");
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
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $affected = DB::table('cursos')
            ->where('id', $id)
            ->update($request->all());
            if($affected){
                return $this->sendSuccess("Curso alterado com sucesso!");
            } else
            {
                return $this->sendError("Falha ao atualizar Curso",404);
            }
        } catch(Exception $e){
            return $this->sendError("Falha ao atualizar Curso: Faltam os parâmetros",404);
        }
            
    }

    public function delete($id){
        $curso = DB::table('cursos')->where('id', '=', $id)->delete();
        if($curso){
            return $this->sendSuccess("Curso excluído com sucesso!");
        } else
        {
            return $this->sendError("Falha ao excluir Curso",404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        //
    }
}
