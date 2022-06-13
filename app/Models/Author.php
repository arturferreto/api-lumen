<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Author
 * @package App\Models
 */
class Author extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'autores';

    /**
     * @var string[]
     */
    protected $fillable = [
        'nome',
        'sobrenome',
        'email',
        'senha',
        'sexo',
        'ativo'
    ];

    /**
     * @var string[]
     */
    protected $hidden = [
        'senha'
    ];

    /**
     * @var array
     */
    public array $rules = [
        'nome' => 'required|min:2|max:45|alpha',
        'sobrenome' => 'required|min:2|max:60|alpha',
        'email' => 'required|email|max:100|email:rfc,dns',
        'senha' => 'required|between:6,12',
        'sexo' => 'required|alpha|max:1'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function news()
    {
        return $this->hasMany(News::class);
    }
}
