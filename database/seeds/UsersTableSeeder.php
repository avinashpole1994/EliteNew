<?php

use Illuminate\Database\Seeder;
use App\User;

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
        	'name'      =>'vivek khandekar',
        	'email'     =>'vivek@gmail.com',
        	'password'  =>Hash::make('vivek'),
        	'remember_token' => str_randam(10),  
        ]);
    }
}
