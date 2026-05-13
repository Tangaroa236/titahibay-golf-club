<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class ProfileController extends Controller
{
    // View any member's profile
    public function show(User $user)
    {
        $posts = $user->posts()->with(['likes', 'comments.user'])->latest()->get();

        return view('profile.show', compact('user', 'posts'));
    }

    // View your own edit profile page
    public function edit()
    {
        return view('profile.edit', ['user' => auth()->user()]);
    }

    // Save your profile changes
    public function update(Request $request)
    {
        $user = auth()->user();

        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'bio'         => 'nullable|string|max:1000',
            'handicap'    => 'nullable|numeric|min:0|max:54',
            'best_score'  => 'nullable|integer|min:1',
            'games_played'=> 'nullable|integer|min:0',
            'profile_photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Handle photo upload
        if ($request->hasFile('profile_photo')) {
            // Delete old photo if exists
            if ($user->profile_photo) {
                Storage::disk('public')->delete($user->profile_photo);
            }
            $validated['profile_photo'] = $request->file('profile_photo')->store('profile-photos', 'public');
        }

        $user->update($validated);

        return redirect()->route('profile.show', $user)->with('success', 'Profile updated!');
    }
}