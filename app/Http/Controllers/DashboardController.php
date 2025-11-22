<?php

namespace App\Http\Controllers;

use App\Models\StudentQrToken;

class DashboardController extends Controller
{
    public function index()
    {
        $student = auth()->guard('student')->user();

        StudentQrToken::where('student_id', $student->student_id)->delete();

        $token = bin2hex(random_bytes(16));

        StudentQrToken::create([
            'student_id' => $student->student_id,
            'token' => $token,
            'expires_at' => now()->addMinutes(10)
        ]);

        return view('dashboard', compact('token'));
    }

    public function stats()
    {
        return view('stats');
    }

    public function settings()
    {
        return view('settings');
    }
}
