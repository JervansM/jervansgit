<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Lab9Controller extends Controller
{
    public function showRegistrationForm()
    {
        return view('registration');
    }

    public function handleFormSubmission(Request $request)
    {
        $data = $request->only(['name', 'email']);
        DB::table('users')->insert([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt('defaultpassword') // Provide a default hashed password
        ]);
        return redirect('/')->with('successMessage', 'Form submitted successfully!');
    }

    public function showIndex()
    {
        $users = DB::table('users')->select('name', 'email')->get(); // Ensure only 'name' and 'email' are selected
        return view('index', compact('users'));
    }
}
