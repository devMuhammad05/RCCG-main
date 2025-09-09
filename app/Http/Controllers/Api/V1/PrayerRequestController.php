<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Api\V1\StorePrayerRequest;

class PrayerRequestController extends Controller
{
    public function store(StorePrayerRequest $request): JsonResponse
    {
        $data = $request->validated();

        $user = Auth::user();

        $user->prayerRequests()->create($data);

        return $this->createdResponse('Prayer Request created successfully',  $data);
    }
 }
