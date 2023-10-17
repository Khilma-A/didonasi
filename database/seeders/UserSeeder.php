<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'fullname'=> 'Admin',
            'phone_number'=> '081234567890',
            'email'=> 'admin@didonasi.com',
            'password'=>bcrypt('password'),
        ]);
        $admin->assignRole('admin');

        $user = User::create([
            'fullname'=> 'user',
            'phone_number'=> '081234567890',
            'email'=> 'user@didonasi.com',
            'password'=>bcrypt('password'),
        ]);
        $user->assignRole('user');
    }
}
