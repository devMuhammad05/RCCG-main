<?php

namespace App\Http\Controllers\Api\V1\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */

    // public function __invoke(Request $request): RedirectResponse|View
    // {
    //     return $request->user()->hasVerifiedEmail()
    //                 ? redirect()->intended('dashboard')
    //                 : view('auth.verify-otp');
    // }


    public function __invoke(Request $request): JsonResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return response()->json([
                'message' => 'Email already verified',
            ], 200);
        }

        return response()->json([
            'message' => 'Email not verified. Please enter your OTP.',
        ], 403);
    }
}
