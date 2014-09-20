<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('users')->truncate();

		User::create([
			'username'		=>	'doug',
			'email'			=>	'dougddo@gmail.com',
			'password'		=>	'1234'
		]);

		// Uncomment the below to run the seeder
		// DB::table('users')->insert($users);
	}

}
