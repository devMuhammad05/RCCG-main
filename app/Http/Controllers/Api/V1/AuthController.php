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

        // return response
        return $this->createdResponse('Registration successful', $user);

    }

    public function login(LoginUserRequest $request)
    {
        $data = $request->validated();

        if (! Auth::attempt($request->only(['email', 'password']))) {
            // return $this->unauthorizedResponse( 'Email or password is not correct', [], 401);
            dd("unauthorized");
        }

        $user = User::where('email', $data['email'])->first();

        return $this->successResponse('Login successful', $user);
    }
}
