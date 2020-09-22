<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    
    protected $table = 'cursos';
    protected $fillable = ['nome'];

    public function disciplinas()
    {
        return $this->hasMany('App\Disciplina');
    }
}
