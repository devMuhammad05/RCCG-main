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
            'filter' => ['nullable', 'in:all,name,profession,email,phone_number'],
        ]);

        $query = $request->input('query');
        $filter = $request->input('filter', 'all');

        $users = User::query();

        match ($filter) {
            'name' => $users->where('name', 'like', "%{$query}%"),
            'profession' => $users->where('profession', 'like', "%{$query}%"),
            'email' => $users->where('email', 'like', "%{$query}%"),
            'phone_number' => $users->where('phone_number', 'like', "%{$query}%"),

            default => $users->where(function ($q) use ($query): void {
                $q->where('name', 'like', "%{$query}%")
                    ->orWhere('email', 'like', "%{$query}%")
                    ->orWhere('phone_number', 'like', "%{$query}%")
                    ->orWhere('profession', 'like', "%{$query}%");
            }),
        };

        $results = $users->limit(20)->get(['id', 'name', 'profession', 'location', 'avatar']);

        return $this->successResponse('Search results returned successfully', $results);
    }
}
