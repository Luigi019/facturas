<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@test.com',
                'password' => bcrypt('12345678'),
                'role' => 'Admin',
            ],
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@test.com',
                'password' => bcrypt('12345678'),
                'role' => 'SuperAdmin',
            ],
        ];
        foreach ($users as $user) {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password'],
                'role' => $user['role'],
            ]);
        }
    }
}
