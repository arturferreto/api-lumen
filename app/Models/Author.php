<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use SoftDeletes;

    protected $table = 'autores';

    protected $fillable = [
        'nome',
        'sobrenome',
        'email',
        'senha',
        'sexo',
        'ativo'
    ];

    protected $hidden = [
        'senha'
    ];

    public function noticias()
    {
        return $this->hasMany(News::class);
    }
}
