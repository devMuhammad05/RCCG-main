<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\UpdateUserProfileRequest;
use App\Http\Resources\V1\UserProfileResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        $data = new UserProfileResource($user);

        return $this->successResponse('User Profile returned successfully', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserProfileRequest $request)
    {
        $user = Auth::user();

        $user->update($request->validated());

        $data = new UserProfileResource($user);

        return $this->successResponse('User Profile updated successfully', $data);

    }
}
