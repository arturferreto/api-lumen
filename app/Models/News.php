<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use SoftDeletes;

    protected $table = 'noticias';

    protected $fillable = [
        'autor_id',
        'titulo',
        'subtitulo',
        'descricao',
        'publicado_em',
        'slug',
        'ativo'
    ];

    public function imagensNoticias()
    {
        return $this->hasMany(ImageNews::class);
    }
}
