<?php

namespace App\Repositories\Models;

use App\Repositories\AbstractRepository;

/**
 * Class ImageNewsRepository
 * @package App\Repositories\Models
 */
class ImageNewsRepository extends AbstractRepository
{
    /**
     * @param int $newsId
     * @return array
     */
    public function findByNews(int $newsId): array
    {
        return $this->model::where('noticia_id', $newsId)->get()->toArray();
    }

    /**
     * @param int $newsId
     * @return bool
     */
    public function deleteByNews(int $newsId): bool
    {
        $result = $this->model::where('noticia_id', $newsId)->delete();

        return $result ? true : false;
    }
}
