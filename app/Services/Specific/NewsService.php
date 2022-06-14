<?php

namespace App\Services\Specific;

use Illuminate\Support\Str;
use App\Services\AbstractService;

/**
 * Class NewsService
 * @package App\Services\Specific
 */
class NewsService extends AbstractService
{
    /**
     * @param int $authorId
     * @param int $limit
     * @param array $orderBy
     * @return array
     */
    public function findByAuthor(int $authorId, int $limit, array $orderBy = []): array
    {
        return $this->repository->findByAuthor($authorId, $limit, $orderBy);
    }

    /**
     * @param string $param
     * @return array
     */
    public function findBy(string $param): array
    {
        return $this->repository->findBy($param);
    }

    /**
     * @param string $param
     * @return bool
     */
    public function deleteBy(string $param): bool
    {
        return $this->repository->deleteBy($param);
    }

    /**
     * @param int $authorId
     * @return bool
     */
    public function deleteByAuthor(int $authorId): bool
    {
        return $this->repository->deleteByAuthor($authorId);
    }

    /**
     * @param array $data
     * @return array
     */
    public function create(array $data): array
    {
        $data['slug'] = Str::slug($data['titulo'] . ' ' . $data['subtitulo']);

        return $this->repository->create($data);
    }

    /**
     * @param string $param
     * @param array $data
     * @return bool
     */
    public function editBy(string $param, array $data): bool
    {
        if (isset($data['titulo']) && isset($data['subtitulo'])) {
            $data['slug'] = Str::slug($data['titulo'] . ' ' . $data['subtitulo']);
        }

        return $this->repository->editBy($param, $data);
    }
}
