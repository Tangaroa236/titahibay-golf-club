<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class ExportController extends Controller
{
    // Show the exports page
    public function index()
    {
        return view('admin.exports');
    }

    // Export all users / members as CSV
    public function exportUsers()
    {
        $users = User::all();

        $filename = 'members-' . now()->format('Y-m-d') . '.csv';

        $headers = [
            'Content-Type'        => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
        ];

        $callback = function () use ($users) {
            $file = fopen('php://output', 'w');

            // Column headers
            fputcsv($file, ['ID', 'Name', 'Email', 'Role', 'Handicap', 'Best Score', 'Games Played', 'Joined']);

            // Each user row
            foreach ($users as $user) {
                fputcsv($file, [
                    $user->id,
                    $user->name,
                    $user->email,
                    $user->role,
                    $user->handicap ?? '-',
                    $user->best_score ?? '-',
                    $user->games_played ?? 0,
                    $user->created_at->format('d/m/Y'),
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    // Export golf scores as CSV
    public function exportGolfScores()
    {
        $users = User::whereNotNull('handicap')
            ->orWhereNotNull('best_score')
            ->orWhere('games_played', '>', 0)
            ->get();

        $filename = 'golf-scores-' . now()->format('Y-m-d') . '.csv';

        $headers = [
            'Content-Type'        => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
        ];

        $callback = function () use ($users) {
            $file = fopen('php://output', 'w');

            // Column headers
            fputcsv($file, ['ID', 'Name', 'Email', 'Handicap', 'Best Score', 'Games Played']);

            // Each user row
            foreach ($users as $user) {
                fputcsv($file, [
                    $user->id,
                    $user->name,
                    $user->email,
                    $user->handicap ?? '-',
                    $user->best_score ?? '-',
                    $user->games_played ?? 0,
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    // Export green fees as CSV
    public function exportGreenFees()
    {
        $filename = 'green-fees-' . now()->format('Y-m-d') . '.csv';

        $headers = [
            'Content-Type'        => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
        ];

        // Green fees data — update these prices to match your actual fees
        $fees = [
            ['Category', 'Weekday', 'Weekend', 'Public Holiday'],
            ['Member', '$20', '$25', '$30'],
            ['Guest', '$40', '$50', '$60'],
            ['Junior Member', '$10', '$15', '$20'],
            ['Senior Member', '$15', '$20', '$25'],
            ['Visitor', '$45', '$55', '$65'],
        ];

        $callback = function () use ($fees) {
            $file = fopen('php://output', 'w');

            foreach ($fees as $row) {
                fputcsv($file, $row);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}