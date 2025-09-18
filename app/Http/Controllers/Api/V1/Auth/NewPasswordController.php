<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\Otp;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class NewPasswordController extends Controller
{
    use Otp;

    /**
     * Reset the user's password via API.
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'email' => ['required', 'email', 'exists:users,email'],
            'otp' => ['required', 'digits:6'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user) {
            return $this->errorResponse('We could not find an account with that email.', 404);
        }

        // Verify OTP before allowing password reset
        $verifyOtp = $this->verifyOtp($request->email, $request->otp);
        if (! $verifyOtp) {
            return $this->errorResponse('Invalid OTP provided.', 422);
        }

        // Update password
        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return $this->successResponse('Password updated successfully. You can now log in.');
    }
}
