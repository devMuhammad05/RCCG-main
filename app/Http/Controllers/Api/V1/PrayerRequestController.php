<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StorePrayerRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class PrayerRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $user = Auth::user();

        $data = $user->prayerRequests()->paginate(8);

        return $this->successResponse('Prayer Request returned successfully', $data);
    }

    public function store(StorePrayerRequest $request): JsonResponse
    {
        $data = $request->validated();

        $user = Auth::user();

        $user->prayerRequests()->create($data);

        return $this->createdResponse('Prayer Request created successfully', $data);
    }
}
