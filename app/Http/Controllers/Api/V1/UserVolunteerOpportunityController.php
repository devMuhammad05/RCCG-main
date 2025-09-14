<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserVolunteerOpportunityController extends Controller
{
    /**
     * Display a listing of volunteer signups for a specific opportunity.
     */
    public function index(): JsonResponse
    {
        $user = Auth::user();

        $opportunities = $user->volunteerSignups()->with('opportunity')->get();

        return $this->successResponse(
            'Volunteer signups retrieved successfully',
            $opportunities
        );
    }
}
