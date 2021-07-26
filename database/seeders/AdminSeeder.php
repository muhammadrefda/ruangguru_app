<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@ruangguru.com',
            'email_verified_at' => now(),
            'password' => bcrypt('secret'),
        ]);

        $user->createToken('token')->plainTextToken;
        $user->assignRole('Admin');
    }
}
