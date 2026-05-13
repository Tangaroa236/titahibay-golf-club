<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'body',
        'image',
    ];

    // The member who wrote this post
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // All likes on this post
    public function likes()
    {
        return $this->hasMany(MemberPostLike::class);
    }

    // All comments on this post
    public function comments()
    {
        return $this->hasMany(MemberPostComment::class)->latest();
    }

    // Check if a specific user has liked this post
    public function isLikedBy(User $user)
    {
        return $this->likes()->where('user_id', $user->id)->exists();
    }
}