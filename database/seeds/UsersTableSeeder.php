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
        \App\User::firstOrCreate([
           'name' => 'Ahmed Fathy',
           'email' => 'admin@gmail.com',
           'password' => bcrypt(123456),
           'is_admin' => true,
           'api_token' => str_random(60),
        ]);

        factory(\App\User::class, 50)->create();
    }
}
