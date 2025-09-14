<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\VolunteerOpportunityRequest;
use App\Models\VolunteerOpportunity;
use Illuminate\Http\JsonResponse;

class VolunteerOpportunityController extends Controller
{
    /**
     * Display a listing of volunteer opportunities.
     */
    public function index(): JsonResponse
    {
        $opportunities = VolunteerOpportunity::with('signups')
            ->latest()
            ->paginate(10);

        return $this->successResponse(
            'Volunteer opportunities retrieved successfully',
            $opportunities
        );
    }

    // /**
    //  * Store a newly created volunteer opportunity.
    //  */
    // public function store(VolunteerOpportunityRequest $request): JsonResponse
    // {
    //     $data = $request->validated();
    //     $opportunity = VolunteerOpportunity::create($data);

    //     return $this->createdResponse(
    //         'Volunteer opportunity created successfully',
    //         $opportunity->load('signups')
    //     );
    // }

    // /**
    //  * Display the specified volunteer opportunity.
    //  */
    // public function show(VolunteerOpportunity $volunteerOpportunity): JsonResponse
    // {
    //     $volunteerOpportunity->load('signups.user');

    //     return $this->successResponse(
    //         'Volunteer opportunity retrieved successfully',
    //         $volunteerOpportunity
    //     );
    // }

    // /**
    //  * Update the specified volunteer opportunity.
    //  */
    // public function update(VolunteerOpportunityRequest $request, VolunteerOpportunity $volunteerOpportunity): JsonResponse
    // {
    //     $data = $request->validated();
    //     $volunteerOpportunity->update($data);

    //     return $this->successResponse(
    //         'Volunteer opportunity updated successfully',
    //         $volunteerOpportunity->load('signups')
    //     );
    // }

    // /**
    //  * Remove the specified volunteer opportunity.
    //  */
    // public function destroy(VolunteerOpportunity $volunteerOpportunity): JsonResponse
    // {
    //     $volunteerOpportunity->delete();

    //     return $this->successResponse('Volunteer opportunity deleted successfully');
    // }
}