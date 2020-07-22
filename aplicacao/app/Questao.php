<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Questao extends Model
{
    protected $fillable = ['enunciado', 'a', 'b', 'c', 'd', 'e', 'correta','ativo'];
}
