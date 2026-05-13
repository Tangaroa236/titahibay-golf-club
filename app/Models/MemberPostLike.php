<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberPostLike extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'member_post_id',
    ];

    // The user who liked the post
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // The post that was liked
    public function post()
    {
        return $this->belongsTo(MemberPost::class, 'member_post_id');
    }
}