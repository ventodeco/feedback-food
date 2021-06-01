<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Http\Requests\FeedbackFoodStoreRequest;
use Illuminate\Http\Request;

class FoodImageController extends Controller
{
    public function store(FeedbackFoodStoreRequest $request)
    {
        // $path = $request->file('avatar')->store('avatars');

        // return $path;
        return response()->json([
            'status' => true,
            'meta' => [
                'response_code' => 200,
                'code' => 200,
                'severity' => "OK",
                'messages' => 'Food has been stored successfully.'
            ]
        ]);

    }
}
