<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'admin@cursinhodovito.com',
            'password' => bcrypt('cursinhodovito'),
        ]);
    }
}
