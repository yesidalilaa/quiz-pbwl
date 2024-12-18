<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'user_email' => 'admin@example.com',
            'user_password' => bcrypt('123'), // Password di-hash
            'user_nama' => 'Admin User',
            'user_alamat' => 'Jl. Admin No. 1',
            'user_hp' => '08123456789',
            'user_pos' => '12345',
            'user_role' => 'admin',
            'user_aktif' => 'Y',
        ]);
    }
}
