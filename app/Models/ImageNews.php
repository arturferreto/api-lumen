<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ImageNews
 * @package App\Models
 */
class ImageNews extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'imagens_noticias';

     /**
     * @var string[]
     */
    protected $fillable = [
        'noticia_id',
        'imagem',
        'descricao',
        'ativo'
    ];

    /**
     * @var array
     */
    public array $rules = [
        'noticia_id' => 'required|numeric',
        'imagem' => 'required',
        'descricao' => 'required|min:10|max:255'
    ];
}
