<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ImageNews extends Model
{
    use SoftDeletes;

    protected $table = 'imagens_noticias';

    protected $fillable = [
        'noticia_id',
        'imagem',
        'descricao',
        'ativo'
    ];
};
