<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);


         $this->command->info('Admin => admin@gmail.com');
         $this->command->info('password => 123456');
    }
}
