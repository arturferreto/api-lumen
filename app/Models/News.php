<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'noticias';

    /**
     * @var string[]
     */
    protected $fillable = [
        'autor_id',
        'titulo',
        'subtitulo',
        'descricao',
        'publicado_em',
        'slug',
        'ativo'
    ];

    /**
     * @var array|string[]
     */
    public array $rules = [
        'autor_id' => 'required|numeric',
        'titulo' => 'required|min:20|max:100',
        'subtitulo' => 'required|min:20|max:155',
        'descricao' => 'required|min:100'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images()
    {
        return $this->hasMany(ImageNews::class);
    }
}
