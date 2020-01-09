<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Aluno_turma extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'aluno_id', 'turma_id',
    ];

    public function aluno()
    {
        return $this->belongsTo('App\Aluno', 'aluno_id');
    }
}
