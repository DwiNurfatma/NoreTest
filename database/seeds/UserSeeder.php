<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => 'Dwi Nurfatma',
                'email' => 'Admin@gmail.com',
                'role' => 'admin',
                'email_verified_at' => '2022-12-08 06:41:32',
                'password' => bcrypt('12345678')
            ]
        );
        User::create(
            [
                'name' => 'Lina Aulia',
                'email' => 'lina@gmail.com',
                'role' => 'user',
                'email_verified_at' => '2022-12-08 06:41:32',
                'password' => bcrypt('12345678')
            ]
        );
    }
}
