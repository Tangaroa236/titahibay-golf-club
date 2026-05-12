<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_members' => User::count(),
            'new_members_this_month' => User::whereMonth('created_at', now()->month)->count(),
            'total_posts' => 0,
            'upcoming_events' => 0,
        ];

        return view('admin.dashboard', compact('stats'));
    }
}