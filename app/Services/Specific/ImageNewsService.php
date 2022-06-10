<?php

namespace App\Services\Specific;

use App\Services\AbstractService;

/**
 * Class ImageNewsService
 * @package App\Services\Specific
 */
class ImageNewsService extends AbstractService
{
    /**
     * @param int $newsId
     * @return array
     */
    public function findByNews(int $newsId): array
    {
        return $this->repository->findByNews($newsId);
    }

    /**
     * @param int $newsId
     * @return bool
     */
    public function deleteByNews(int $newsId): bool
    {
        return $this->repository->deleteByNews($newsId);
    }
}
