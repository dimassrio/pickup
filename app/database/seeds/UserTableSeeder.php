<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();
		User::create(array('id'=>1,'realname'=>'administrator','email'=>'admin@pickup.com','password'=>'$2y$10$bT3SlCocOyWnu4enjEfeOO0L8xxAfPPqjLF4odgIDUIISvT8u.ZBC','birthdate'=>'2014-06-01'));
	}

}