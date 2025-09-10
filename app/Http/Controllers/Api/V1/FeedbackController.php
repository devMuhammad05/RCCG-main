<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreFeedbackRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreFeedbackRequest $request): JsonResponse
    {
        $data = $request->validated();

        $user = Auth::user();

        $user->feedbacks()->create($data);

        return $this->createdResponse('Feedback created successfully', $data);
    }
}
