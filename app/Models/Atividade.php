<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    use HasFactory;
    protected $fillable = [
        'data_atividade',
        'hora_inicio',
        'hora_fim',
        'descricao',
        'user_id',
        'category_id',
        'orgao_id'
        ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
