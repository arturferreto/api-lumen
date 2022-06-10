<?php

namespace App\Repositories\Models;

use App\Repositories\AbstractRepository;

/**
 * Class NewsRepository
 * @package App\Repositories
 */
class NewsRepository extends AbstractRepository
{

    /**
     * @param int $authorId
     * @param int $limit
     * @param array $orderBy
     * @return array
     */
    public function findByAuthor(int $authorId, int $limit, array $orderBy = []): array
    {
        $results = $this->model::where('autor_id', $authorId);

        foreach ($orderBy as $key => $value) {
            if (strstr($key, '-'))
            {
                $key = substr($key, 1);
            }

            $results->orderBy($key, $value);
        }

        return $results->paginate($limit)
            ->appends([
                'order_by' => implode(',', array_keys($orderBy)),
                'limit' => $limit
            ])->toArray();
    }
}
