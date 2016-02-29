<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Arquivo extends Model
{
    use SearchableTrait;

    protected $searchable = [
        'columns' => [
            'titulo' => 10,
            'materia' => 5,
            'categoria' => 5,
            'professor' => 2,
            'turma' => 2,
            'descricao' => 10
        ]
    ];

    protected $guarded = [];
}
