<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'admin',
            'email' => 'admin@e-commerce.com',
            'password' => bcrypt('admin'),
            'admin' => 1,
            'avatar' => asset('avatars/user.jpg'),
        ]);
    }
}
