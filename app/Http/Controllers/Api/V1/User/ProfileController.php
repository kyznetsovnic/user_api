<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class ProfileController extends Controller
{
    public function __invoke(int $id): JsonResponse
    {
        $user = User::findOrFail($id);

        return response()->json(new UserResource($user));
    }
}
