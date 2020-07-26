<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Raesa',
            'email' => 'raesa@gmail.com',
            'password' => bcrypt('12345678'),
            ]);
        $admin->assignRole('Admin');

        $kades = User::create([
            'name' => 'Kades',
            'email' => 'kades@gmail.com',
            'password' => bcrypt('12345678'),
            ]);
        $kades->assignRole('Kades');
    }
}
