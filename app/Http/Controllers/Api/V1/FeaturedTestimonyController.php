<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\FeaturedTestimonyResource;
use App\Models\Testimony;
use Illuminate\Http\Request;

class FeaturedTestimonyController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data = Testimony::featured()
            ->with('user')
            ->latest()
            ->get();

        return $this->successResponse(
            'Featured Testimonies returned successfully',
            FeaturedTestimonyResource::collection($data)
        );
    }
}
