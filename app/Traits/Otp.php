<?php

namespace App\Traits;

use App\Mail\OtpMail;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

trait Otp
{
    /**
     * Send OTP to the specified email address
     */
    public function sendOtp(string $email): array
    {
        $otp = random_int(100000, 999999);

        try {
            // Store OTP in cache for 10 minutes
            Cache::put($email, $otp, now()->addMinutes(10));

            Mail::to($email)->send(new OtpMail($otp));

            return [
                'success' => true,
                'message' => 'OTP sent successfully',
            ];
        } catch (\Exception $e) {

            Log::error('OTP Send Error: '.$e->getMessage());

            return [
                'success' => false,
                'message' => 'Failed to send OTP',
            ];
        }
    }

    /**
     * Verify the provided OTP against cached value
     */
    public function verifyOtp(string $email, string $providedOtp): bool
    {
        $cachedOtp = Cache::get($email);

        if (! $cachedOtp) {
            return false;
        }

        if ($cachedOtp == $providedOtp) {
            // Remove OTP from cache after successful verification
            Cache::forget($email);

            return true;
        }

        return false;
    }
}
