<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\AbstractController;
use App\Services\Specific\AuthorService;

/**
 * Class AuthorController
 * @package App\Http\Controllers\V1
 */
class AuthorController extends AbstractController
{
    /**
     * @var array|string[]
     */
    protected array $searchFields = [
        'nome',
        'sobrenome'
    ];

    /**
     * AuthorController Construtor.
     * @param AuthorService $service
     */
    public function __construct(AuthorService $service)
    {
        parent::__construct($service);
    }
}
