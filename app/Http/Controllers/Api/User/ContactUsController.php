<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\User\ContactUsRequest;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function create()
    {
        return response()->json(
            [
                'code' => 200,
                'status' => true,
                'message' => 'please enter your name and message',
            ],
            200,

        );
    }
    public function store(ContactUsRequest $request) {
        $validated = $request->validated();
        ContactUs::create($validated);
        return response()->json(
            [
                'code' => 200,
                'status' => true,
                'message' => 'data created successfully',
                'data' => $validated
            ],
            200,

        );
    }
}
