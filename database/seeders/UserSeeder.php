<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    public function run()
    {
        $admin = Admin::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

        $role = Role::where('name', 'admin')->first();
        $admin->assignRole($role);

        $user = User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => Hash::make('password'),
        ]);

        $role = Role::where('name', 'user')->first();
        $user->assignRole($role);
    }
}
