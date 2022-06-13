<?php

namespace App\Http\Controllers\V1;

use Exception;
use App\Http\Controllers\AbstractController;
use App\Services\Specific\NewsService;
use Illuminate\Http\{JsonResponse, Request, Response};

/**
 * Class NewsController
 * @package App\Http\Controllers\V1
 */
class NewsController extends AbstractController
{
    /**
     * @var array|string[]
     */
    protected array $searchFields = [
        'titulo',
        'slug'
    ];

    /**
     * NewsController Constructor.
     * @param NewsService $service
     */
    public function __construct(NewsService $service)
    {
        parent::__construct($service);
    }

    /**
     * @param Request $request
     * @param int $author
     * @return JsonResponse
     */
    public function findByAuthor(Request $request, int $author): JsonResponse
    {
        try {
            $limit = (int) $request->get('limit', 10);
            $orderBy = $request->get('order_by', []);

            $result = $this->service->findByAuthor($author, $limit, $orderBy);
            $response = $this->successResponse($result, Response::HTTP_PARTIAL_CONTENT);
        } catch (Exception $e) {
            $response = $this->errorResponse($e);
        }

        return response()->json($response, $response['status_code']);
    }

    /**
     * @param Request $request
     * @param string $param
     * @return JsonResponse
     */
    public function findBy(Request $request, string $param): JsonResponse
    {
        try {
            $result = $this->service->findBy($param);
            $response = $this->successResponse($result);
        } catch (Exception $e) {
            $response = $this->errorResponse($e);
        }

        return response()->json($response, $response['status_code']);
    }

    /**
     * @param Request $request
     * @param string $param
     * @return JsonResponse
     */
    public function deleteBy(Request $request, string $param): JsonResponse
    {
        try {
            $result['deletado'] = $this->service->deleteBy($param);

            $response = $this->successResponse($result);
        } catch (Exception $e) {
            $response = $this->errorResponse($e);
        }

        return response()->json($response, $response['status_code']);
    }

    /**
     * @param Request $request
     * @param int $author
     * @return bool
     */
    public function deleteByAuthor(Request $request, int $author): JsonResponse
    {
        try {
            $result['deletado'] = $this->service->deleteByAuthor($author);

            $response = $this->successResponse($result);
        } catch (Exception $e) {
            $response = $this->errorResponse($e);
        }

        return response()->json($response, $response['status_code']);
    }
}
