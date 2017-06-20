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
		DB::table('users')->insert([
            'name' => 'Ariel',
            'email' => 'arielsinatra'.'@gmail.com',
            'password' => bcrypt('admin'),
            'id_privilege' => 1
        ]);
    }
}
