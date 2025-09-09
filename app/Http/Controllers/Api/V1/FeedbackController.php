<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Api\V1\StoreFeedbackRequest;

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

        return $this->createdResponse('Feedback created successfully',  $data);
    }
}
