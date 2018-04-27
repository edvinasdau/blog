<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User ::create( [
            'name'                  => 'admin',
            'password'          => bcrypt('admin'),
            'email'              => 'admin@admin.com',
        ] );
    }
}
