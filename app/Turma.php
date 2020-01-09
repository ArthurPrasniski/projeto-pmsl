<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Turma extends Model implements auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'descricao', 'vagas', 'professor',
    ];
}
