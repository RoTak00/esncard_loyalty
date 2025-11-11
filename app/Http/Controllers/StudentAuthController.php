<?php

namespace App\Http\Controllers;

class StudentAuthController extends Controller
{
    public function register($id)
    {
        $names =
            [
                'aaa' => 'Cafe Bar',
                'bbb' => 'Cafezinho',
                'ccc' => 'Cafeteria'
            ];

        $data = [];

        if (!array_key_exists($id, $names)) {
            abort(404);
        }

        $data['restaurant_name'] = $names[$id];

        $data['register_action'] = route('register.submit', ['id' => $id]);
        $data['terms_of_service_url'] = route('terms-and-conditions');
        return view('register', $data);
    }

    public function register_submit($id)
    {
        // Verify the ESNcard

        // Register or login the student

        // Redirect to the user QR code page
        return redirect()->route('dashboard');
    }
}
