<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\Otp;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ForgetPasswordController extends Controller
{
    use Otp;

    /**
     * Send OTP for password reset.
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user) {
            return $this->errorResponse('We could not find an account with the provided email.', 404);
        }

        $sendOtp = $this->sendOtp($request->email);

        if (! $sendOtp['success']) {
            return $this->errorResponse('Failed to send OTP. Please try again.', 500);
        }

        return $this->successResponse('OTP has been sent to your email.');
    }
}
