<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Services\Api\UserServiceInterface;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends ApiController
{
    /**
     * UserController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param IndexRequest $request
     * @param UserServiceInterface $serviceService
     * @return \Illuminate\Http\JsonResponse
     * @throws \App\Exceptions\CheckAuthenticationException
     * @throws \App\Exceptions\CheckAuthorizationException
     * @throws \App\Exceptions\NotFoundException
     * @throws \App\Exceptions\QueryException
     * @throws \App\Exceptions\ServerException
     * @throws \App\Exceptions\UnprocessableEntityException
     */
    public function index(Request $request, UserServiceInterface $serviceService)
    {
        $params = $request->all();

        return $this->getData(function () use ($serviceService, $params) {
            return $serviceService->index($params);
        });
    }
}
