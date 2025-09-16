<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Traits\Otp;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Api\V1\Auth\LoginUserRequest;
use App\Http\Requests\Api\V1\Auth\RegisterUserRequest;

class AuthController extends Controller
{
    use Otp;

    public function register(RegisterUserRequest $request): JsonResponse
    {
        $data = $request->validated();

        $user = User::create($data);

        $token = $user->createToken('auth_token')->plainTextToken;

        $response = [
            'token' => $token,
            'user' => $user,
        ];

        // $this->sendOtp($user->email);


        return $this->createdResponse('Registration successful', $response);
    }

    public function login(LoginUserRequest $request)
    {
        $data = $request->validated();

        if (! Auth::attempt($data)) {
            return $this->unauthorizedResponse('Email or password incorrect');
        }

        $user = Auth::user();

        // if (! $user->hasVerifiedEmail()) {
        //     $this->sendOtp($user->email);
        //     return $this->errorResponse('Email not verified. A new OTP has been sent to your email.', 403);
        // }

        $token = $user->createToken('auth_token')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token,
        ];

        return $this->successResponse('Login successful', $response);
    }


    public function logout()
    {
        Auth::user()->currentAccessToken()->delete();

        return $this->successResponse('Logged out successfully');
    }
}
