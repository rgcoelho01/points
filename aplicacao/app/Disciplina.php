<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Disciplina extends Model
{
    use SoftDeletes;
    protected $fillable = ['nome', 'curso_id'];

    public function questoes()
    {
        return $this->hasMany('App\Questao');
    }
}