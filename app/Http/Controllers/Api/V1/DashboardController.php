<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
    */
    public function index(): JsonResponse
    {
        $userCount = User::count();

        $data =[
            'total_user_count' => $userCount,
            // Todo - upcoming event event
        ];

        return $this->successResponse('Dashboard data returned successfully', $data);
    }
}
