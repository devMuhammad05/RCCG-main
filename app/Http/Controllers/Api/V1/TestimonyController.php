<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\V1\TestimonyResource;
use App\Http\Requests\Api\V1\StoreTestimonyRequest;

class TestimonyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $user = Auth::user();

        $data = $user->testimonies()->with('user')->get();

        return $this->successResponse(
            'Testimonies returned successfully',
            TestimonyResource::collection($data)
        );
    }


    public function store(StoreTestimonyRequest $request): JsonResponse
    {
        $data = $request->validated();

        $user = Auth::user();

        $user->testimonies()->create($data);

        return $this->createdResponse('Testimony created successfully', $data);
    }
}
