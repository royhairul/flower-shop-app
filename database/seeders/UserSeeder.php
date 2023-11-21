<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::table('users')->insert([
        //     'username' => 'admin',
        //     'password' => '1234'
        // ]);
        User::create([
                'username' => 'admin',
                'password' => '1234'
        ]);
    }
}
