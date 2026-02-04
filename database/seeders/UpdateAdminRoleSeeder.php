<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UpdateAdminRoleSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('email', 'admin@titahibaygolf.co.nz')->first();
        
        if ($user) {
            $user->role = 'admin';
            $user->save();
            echo "Admin role updated successfully!\n";
        } else {
            echo "Admin user not found!\n";
        }
    }
}