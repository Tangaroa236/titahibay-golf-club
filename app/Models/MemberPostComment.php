<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberPostComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'member_post_id',
        'body',
    ];

    // The user who wrote this comment
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // The post this comment belongs to
    public function post()
    {
        return $this->belongsTo(MemberPost::class, 'member_post_id');
    }
}