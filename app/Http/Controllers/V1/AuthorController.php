<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\AbstractController;
use App\Services\Specific\AuthorService;

/**
 * Class AuthorController
 * @package App\Http\Controller\V1
 */
class AuthorController extends AbstractController
{
    /**
     * @var array|string[]
     */
    protected $searchFields = [
        'nome',
        'sobrenome'
    ];

    public function __construct(AuthorService $service)
    {
        $this->service = $service;
    }
}
