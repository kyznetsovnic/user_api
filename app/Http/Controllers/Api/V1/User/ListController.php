<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class ListController extends Controller
{
    public function __invoke(): JsonResponse
    {
        $users = User::all();
        $response = UserResource::collection($users);
        $count = $response->count();

        return response()->json([
            'users' => $response,
            'count' => $count,
        ]);
    }
}
