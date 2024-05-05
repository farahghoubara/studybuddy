<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\YourController;


class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(RegisterRequest $request)
    {
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }

    public function edit()
    {
        $user = auth()->user();
        return view('users.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $id = auth()->user()->id;
        $user = User::findOrFail($id); // Assuming the user is authenticated

        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:20', // Adjust validation rules as needed
        ]);

        // Update user data
        $user->fill([
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
        ]);
        $user->save();

        Session::flash('success', 'Profile updated successfully.');

        return redirect()->route('profile');
    }

    public function updatePassword(Request $request)
    {
        $id = auth()->user()->id;
        $user = User::findOrFail($id);

        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ], [
            'current_password.required' => 'Please enter your current password.',
            'new_password.required' => 'Please enter a new password.',
            'new_password.min' => 'The new password must be at least 8 characters long.',
            'new_password.confirmed' => 'The new password confirmation does not match.',
        ]);

        // Check if the current password matches the password in the database
        if (!Hash::check($request->input('current_password'), $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.'])->withInput();
        }

        // Update the password
        $user->fill([
            'password' => bcrypt($request->input('new_password')),
        ]);
        $user->save();

        Session::flash('success', 'Password updated successfully.');

        return redirect()->route('profile');
    }
}
