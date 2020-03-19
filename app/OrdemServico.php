<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdemServico extends Model
{
    protected $fillable = [
        'id','tipo','assinatura','observacao','status','tecnico','usuario_id'
    ];

    protected $table = 'ordem_servicos';

    public function usuario() {
        return $this->belongsTo(User::class, 'usuario_id');
    }
}
