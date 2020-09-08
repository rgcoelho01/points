<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aluno extends Model
{
    protected $table = 'alunos';
    protected $fillable = ['user_id', 'curso_id', 'acertos', 'erros', 'pontos', 'ativo'];
}
