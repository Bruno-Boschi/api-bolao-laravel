<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JogoGrupo extends Model
{
    use HasFactory;


    protected $fillable = [
        'time1_id',
        'gols_time1',
        'time2_id',
        'gols_time2',
        'data',
        'hora',
    ];
}
