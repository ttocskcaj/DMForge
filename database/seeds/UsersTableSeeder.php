<?php

use App\User;
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
        User::create([
            'username' => 'ttocskcaj',
            'email' => '123.jack.scott@gmail.com',
            'password' => Hash::make('password')
        ]);
        factory(App\User::class, 9)->create();

    }
}
