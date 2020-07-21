<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        	   User::create([

	            'name' => 'Ashwani',
	            'email' => 'test123@gmail.com',
                'mobile' => '9148942803',
	            'role'  => '1',
	            'password' => Hash::make('test123@gmail.com')

	        ]);
    }
}
