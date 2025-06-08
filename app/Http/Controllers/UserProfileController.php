<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserProfileController extends Controller
{
    public function show($name)
    {
        $user = Auth::user();

        if (strtolower($user->name) !== strtolower($name)) {
            abort(403);
        }

        return view('pages.user.profile.show', compact('user'));
    }

    public function edit($name)
    {
        $user = Auth::user();

        if (strtolower($user->name) !== strtolower($name)) {
            abort(403);
        }

        return view('pages.user.profile.edit', compact('user'));
    }

    public function update(Request $request, $name)
{
    $user = Auth::user();

    $validated = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
        'course' => ['required', Rule::in(['BSIT', 'BEED', 'BSED', 'BSHM', 'BSBA'])],
    ]);

    $user->update($validated);

    return redirect()->route('profile', ['name' => $user->name])->with('success', 'Profile updated successfully!');
}

}
