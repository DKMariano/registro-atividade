<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orgao extends Model
{

    use HasFactory;

    protected $fillable = ['sigla', 'nome'];

    public function atividades()
    {
        return $this->hasMany(Atividade::class, 'orgao_id', 'id');
    }

    public function users()
    {
        return $this->hasMany(User::class, 'orgao_id', 'id');
    }

}
