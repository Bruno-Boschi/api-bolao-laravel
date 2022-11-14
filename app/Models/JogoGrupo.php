<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JogoGrupo extends Model
{
    use HasFactory;

    protected $fillable = [
        'selecao1_id',
        'gols_selecao1',
        'selecao2_id',
        'gols_selecao2',
        'data',
        'hora',
    ];
}
