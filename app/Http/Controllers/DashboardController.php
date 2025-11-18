<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        $student = auth()->guard('student')->user();

        $token = hash('sha256', $student->student_id . floor(time() / 10));

        $data = json_encode([
            'student_id' => $student->student_id,
            'token' => $token
        ]);

        return view('dashboard', compact('data'));
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
