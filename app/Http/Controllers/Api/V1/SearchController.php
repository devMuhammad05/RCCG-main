<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): JsonResponse
    {
        $request->validate([
            'query' => ['required', 'string', 'max:255'],
        ]);

        $query = $request->input('query');

        $users = User::query()
            ->where('name', 'like', "%{$query}%")
            ->orWhere('email', 'like', "%{$query}%")
            ->orWhere('phone_number', 'like', "%{$query}%")
            ->orWhere('profession', 'like', "%{$query}%")
            ->limit(20)
            ->get(['id', 'name', 'profession', 'location', 'avatar']);

        return $this->successResponse('Search results returned successfully', $users);
    }
}
