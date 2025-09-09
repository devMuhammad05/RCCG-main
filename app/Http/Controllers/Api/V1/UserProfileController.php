<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\V1\UserProfileResource;
use App\Http\Requests\Api\V1\UpdateUserProfileRequest;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(?User $user = null)
    {
        $user ??= Auth::user();

        $data = new UserProfileResource($user);

        return $this->successResponse('User Profile returned successfully', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserProfileRequest $request)
    {
        $user = Auth::user();

        // Todo avatar upload, date_of_birt
        $user->update($request->validated());

        $data = new UserProfileResource($user);

        return $this->successResponse('User Profile updated successfully', $data);
    }
}
