<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function register_submit($id, Request $request)
    {
        // Verify the ESNcard
        $data = $request->validate([
            'esncard_serial_code'    => ['required','string','max:64'],
            'name' => ['required','string','max:64'],
            'surname'  => ['required','string','max:64'],
        ]);

        $request->session()->regenerate();

        // Store only what you need
        $request->session()->put('student', [
            'esncard'    => $data['esncard_serial_code'],
            'name' => $data['name'],
            'surname'  => $data['surname'],
            'company_id' => $id
        ]);

        return redirect()->intended('/me');

    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
