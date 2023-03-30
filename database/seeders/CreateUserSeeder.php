<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [

            [
                'name' => 'User',
                'first_name' => 'user',
                'phone' => '781107646',
                'email' => 'user@gmail.com',
                'password' => bcrypt('user12345'),
                'role' => 0
            ],
            [
                'name' => 'Driver',
                'first_name' => 'driver',
                'phone' => '761107642',
                'email' => 'driver@gmail.com',
                'password' => bcrypt('driver12345'),
                'role' => 1
            ],
            [
                'name' => 'Admin',
                'first_name' => 'admin',
                'phone' => '761147644',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin12345'),
                'role' => 2
            ]
            
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
