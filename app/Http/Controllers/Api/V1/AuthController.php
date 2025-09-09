<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Api\V1\Auth\LoginUserRequest;
use App\Http\Requests\Api\V1\Auth\RegisterUserRequest;


class AuthController extends Controller
{
    public function register(RegisterUserRequest $request): JsonResponse
    {
        $data = $request->validated();

        $user = User::create($data);

        $token = $user->createToken('auth_token')->plainTextToken;


        $response = [
            'user' => $user,
            'token' => $token,
        ];

        // return response
        return $this->createdResponse('Registration successful', $response);
    }

    public function login(LoginUserRequest $request)
    {
        $data = $request->validated();

        if (! Auth::attempt($data)) {
            // return $this->unauthorizedResponse( 'Email or password is not correct', [], 401);
            dd("unauthorized");
        }

        $user = User::where('email', $data['email'])->first();

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
