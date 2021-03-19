<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    //
    protected $table = 'formulario';

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'escolaridade',
        'cargo_desejado',
        'observacao',
        'arquivo',
        'ip',
        'data_hora_envio',
    ];
}
