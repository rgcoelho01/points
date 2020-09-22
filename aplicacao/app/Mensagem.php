<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    protected $table = 'mensagens';
    protected $fillable = ['de_user_id', 'para_user_id', 'assunto', 'mensagem', 'ativo'];

    protected $casts = [
        'lida_at' => 'datetime',
    ];

}
