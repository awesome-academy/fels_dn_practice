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
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '0123456789',
            'address' => 'Viet Nam',
            'role' => 0,
            'avatar' => 'admin.png',
            'password' =>md5('123456'),

        ]);
        factory(User::class, 50)->create();
    }
}
