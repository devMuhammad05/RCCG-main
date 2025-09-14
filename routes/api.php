<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\SearchController;
use App\Http\Controllers\Api\V1\FeedbackController;
use App\Http\Controllers\Api\V1\TestimonyController;
use App\Http\Controllers\Api\V1\UserProfileController;
use App\Http\Controllers\Api\V1\PrayerRequestController;
use App\Http\Controllers\Api\V1\UpcomingEventController;
use App\Http\Controllers\Api\V1\VolunteerSignUpController;
use App\Http\Controllers\Api\V1\FeaturedTestimonyController;
use App\Http\Controllers\Api\V1\VolunteerOpportunityController;
use App\Http\Controllers\Api\V1\UserVolunteerOpportunityController;

Route::get('/user', fn (Request $request) => $request->user())->middleware('auth:sanctum');

Route::prefix('v1')->group(function (): void {
    Route::get('/', fn () => 'API is active');

    Route::prefix('auth')->group(function (): void {
        Route::post('register', [AuthController::class, 'register']);
        Route::post('login', [AuthController::class, 'login']);
        Route::post('logout', [AuthController::class, 'login']);
    });

    Route::group(['middleware' => ['auth:sanctum']], function (): void {
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::get('user-profile', [UserProfileController::class, 'index']);
        Route::put('user-profile', [UserProfileController::class, 'update']);

        Route::get('users/{user}/', [UserProfileController::class, 'index']);

        Route::post('feedbacks', FeedbackController::class);
        Route::get('search', SearchController::class);

        Route::post('prayer-requests', [PrayerRequestController::class, 'store']);
        Route::get('prayer-requests', [PrayerRequestController::class, 'index']);

        Route::post('testimonies', [TestimonyController::class, 'store']);
        Route::get('testimonies', [TestimonyController::class, 'index']);

        Route::get('featured-testimonies', FeaturedTestimonyController::class);

        Route::get('upcoming-events', UpcomingEventController::class);

        Route::get('volunteer-opportunities', [VolunteerOpportunityController::class, 'index']);

        Route::apiResource('volunteer-opportunities.signups', VolunteerSignUpController::class)->only('store', 'update');

        Route::get('user-volunteer-opportunities', [UserVolunteerOpportunityController::class, 'index']);


    });


});

