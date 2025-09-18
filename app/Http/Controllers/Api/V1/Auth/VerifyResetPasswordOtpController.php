<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Traits\Otp;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class VerifyResetPasswordOtpController extends Controller
{
    use Otp;

    /**
     * Verify the OTP for password reset.
     */
    public function __invoke(Request $request): JsonResponse
    {
        $data = $request->validate([
            'email' => ['required', 'email'],
            'otp' => ['required', 'digits:6'],
        ]);

        $verifyOtp = $this->verifyOtp($data['email'], $data['otp']);

        if (! $verifyOtp) {
            return $this->errorResponse('Invalid OTP provided.', 422);
        }

        return $this->successResponse('OTP verified successfully. You can now reset your password.', [
            'email' => $data['email'],
        ]);
    }
}
