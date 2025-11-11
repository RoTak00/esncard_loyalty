<?php

namespace App\Http\Controllers;

class InfoController extends Controller
{
    public function terms_and_conditions()
    {
        return view('info.terms-and-conditions');
    }

    public function about()
    {
        return view('info.about');
    }
}
