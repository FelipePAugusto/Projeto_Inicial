<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'id','tipo','descricao','valor'
    ];

    protected $table = 'produtos';
}
