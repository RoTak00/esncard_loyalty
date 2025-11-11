<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
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
