<?php

use App\Http\Controllers\Api\V1\Auth\AuthController;
use App\Http\Controllers\Api\V1\Auth\NewPasswordController;
use App\Http\Controllers\Api\V1\Auth\ForgetPasswordController;
use App\Http\Controllers\Api\V1\Auth\VerifyResetPasswordOtpController;
use App\Http\Controllers\Api\V1\Auth\EmailVerificationPromptController;




Route::prefix('v1')->group(function (): void {
    Route::prefix('auth')->group(function (): void {
        Route::post('register', [AuthController::class, 'register']);
        Route::post('login', [AuthController::class, 'login']);

        Route::post('forgot-password', [ForgetPasswordController::class, 'store']);
        Route::post('verify-reset-password-otp', VerifyResetPasswordOtpController::class)->name('reset.password.verify');

        Route::post('reset-password', [NewPasswordController::class, 'store'])
            ->name('password.store');
    });


    Route::middleware(['auth:sanctum'])->group(function () {
        Route::get('verify-email', EmailVerificationPromptController::class)
            ->name('verification.notice');

        Route::post('/logout', [AuthController::class, 'logout']);
    });
});
