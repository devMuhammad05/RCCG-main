<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreVolunteerSignUpRequest;
use App\Http\Requests\Api\V1\UpdateVolunteerSignUpRequest;
use App\Models\VolunteerOpportunity;
use App\Models\VolunteerSignup;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class VolunteerSignUpController extends Controller
{
    /**
     * Display a listing of volunteer signups for a specific opportunity.
     */
    // public function index(VolunteerOpportunity $volunteerOpportunity): JsonResponse
    // {
    //     $signups = $volunteerOpportunity->signups()
    //         // ->with('user')
    //         ->latest()
    //         ->paginate(10);

    //     return $this->successResponse(
    //         'Volunteer signups retrieved successfully',
    //         $signups
    //     );
    // }

    /**
     * Store a newly created volunteer signup.
     */
    public function store(StoreVolunteerSignUpRequest $request, VolunteerOpportunity $volunteerOpportunity): JsonResponse
    {
        $data = $request->validated();
        $user = Auth::user();

        // Check if user has already signed up for this opportunity
        $existingSignup = $volunteerOpportunity->signups()
            ->where('user_id', $user->id)
            ->first();

        if ($existingSignup) {
            return $this->errorResponse(
                'You have already signed up for this volunteer opportunity',
                409
            );
        }

        $data['user_id'] = $user->id;
        $data['volunteer_opportunity_id'] = $volunteerOpportunity->id;

        $signup = VolunteerSignup::create($data);

        return $this->createdResponse(
            'Volunteer signup created successfully',
            $signup
        );
    }

    /**
     * Display the specified volunteer signup.
     */
    // public function show(VolunteerOpportunity $volunteerOpportunity, VolunteerSignup $signup): JsonResponse
    // {
    //     // Check if the signup belongs to the specified opportunity
    //     if ($signup->volunteer_opportunity_id !== $volunteerOpportunity->id) {
    //         return $this->notFoundResponse('Volunteer signup not found for this opportunity');
    //     }

    //     $signup->load('user', 'opportunity');

    //     return $this->successResponse(
    //         'Volunteer signup retrieved successfully',
    //         $signup
    //     );
    // }

    /**
     * Update the specified volunteer signup.
     */
    public function update(UpdateVolunteerSignUpRequest $request, VolunteerOpportunity $volunteerOpportunity, VolunteerSignup $signup): JsonResponse
    {
        //  Check if the signup belongs to the specified opportunity
        if ($signup->volunteer_opportunity_id !== $volunteerOpportunity->id) {
            return $this->notFoundResponse('Volunteer signup not found for this opportunity');
        }

        // Ensure the user can only update their own signup
        if ($signup->user_id !== Auth::id()) {
            return $this->forbiddenResponse('You can only update your own volunteer signup');
        }

        $data = $request->validated();
        $signup->update($data);

        return $this->successResponse(
            'Volunteer signup updated successfully',
            $signup
        );
    }

    /**
     * Remove the specified volunteer signup.
     */
    // public function destroy(VolunteerOpportunity $volunteerOpportunity, VolunteerSignup $signup): JsonResponse
    // {
    //     // Ensure the signup belongs to the specified opportunity
    //     if ($signup->volunteer_opportunity_id !== $volunteerOpportunity->id) {
    //         return $this->notFoundResponse('Volunteer signup not found for this opportunity');
    //     }

    //     // Ensure the user can only delete their own signup
    //     if ($signup->user_id !== Auth::id()) {
    //         return $this->forbiddenResponse('You can only delete your own volunteer signup');
    //     }

    //     $signup->delete();

    //     return $this->successResponse('Volunteer signup deleted successfully');
    // }
}
