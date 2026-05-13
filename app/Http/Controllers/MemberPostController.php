<?php

namespace App\Http\Controllers;

use App\Models\MemberPost;
use App\Models\MemberPostLike;
use App\Models\MemberPostComment;
use Illuminate\Http\Request;

class MemberPostController extends Controller
{
    // Create a new post
    public function store(Request $request)
    {
        $validated = $request->validate([
            'body'  => 'required|string|max:1000',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $validated['user_id'] = auth()->id();

        // Handle image upload
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('post-images', 'public');
        }

        MemberPost::create($validated);

        return back()->with('success', 'Post created!');
    }

    // Delete a post (only your own)
    public function destroy(MemberPost $memberPost)
    {
        if ($memberPost->user_id !== auth()->id()) {
            abort(403);
        }

        $memberPost->delete();

        return back()->with('success', 'Post deleted!');
    }

    // Like or unlike a post
    public function like(MemberPost $memberPost)
    {
        $existing = MemberPostLike::where('user_id', auth()->id())
            ->where('member_post_id', $memberPost->id)
            ->first();

        if ($existing) {
            // Already liked — so unlike it
            $existing->delete();
        } else {
            // Not liked yet — like it
            MemberPostLike::create([
                'user_id'        => auth()->id(),
                'member_post_id' => $memberPost->id,
            ]);
        }

        return back();
    }

    // Add a comment
    public function comment(Request $request, MemberPost $memberPost)
    {
        $validated = $request->validate([
            'body' => 'required|string|max:500',
        ]);

        MemberPostComment::create([
            'user_id'        => auth()->id(),
            'member_post_id' => $memberPost->id,
            'body'           => $validated['body'],
        ]);

        return back()->with('success', 'Comment added!');
    }

    // Delete a comment (only your own)
    public function destroyComment(MemberPostComment $memberPostComment)
    {
        if ($memberPostComment->user_id !== auth()->id()) {
            abort(403);
        }

        $memberPostComment->delete();

        return back()->with('success', 'Comment deleted!');
    }
}