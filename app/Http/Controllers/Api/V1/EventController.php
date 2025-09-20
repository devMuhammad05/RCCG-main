<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
    */
    // public function index(): JsonResponse
    // {
    //     $data = Event::upcoming()->get();

    //     return $this->successResponse(message: 'Upcoming events returned successfully', $data);
    // }
}
