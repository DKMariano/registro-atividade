<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Atividade extends Model
{
    use HasFactory, SoftDeletes;
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

    public function orgao()
    {
        return $this->belongsTo(Orgao::class, 'orgao_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
