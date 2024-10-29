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
        $users = collect([[
            'fullname' => 'Super Admin',
            'username' => 'super_admin',
            'email' => 'super_admin@mail.com',
            'password' => bcrypt('P4$$w0Rd'),
        ]]);

        $users->each(fn($user) => User::create($user));
    }
}
