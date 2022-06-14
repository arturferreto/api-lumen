<?php

namespace App\Services\Specific;

use App\Services\AbstractService;

/**
 * Class AuthorService
 * @package App\Services\Specific
 */
class AuthorService extends AbstractService
{
    /**
     * @param array $data
     * @return array
     */
    public function create(array $data): array
    {
        $data['senha'] = encrypt($data['senha']);

        return $this->repository->create($data);
    }

    /**
     * @param string $param
     * @param array $data
     * @return bool
     */
    public function editBy(string $param, array $data): bool
    {
        if (isset($data['senha'])) {
            $data['senha'] = encrypt($data['senha']);
        }

        return $this->repository->editBy($param, $data);
    }
}
