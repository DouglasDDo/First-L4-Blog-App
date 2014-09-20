<?php

class PostsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('posts')->truncate();

		Post::create([
			'title' => 'test title',
			'content'	=>	'something and more something'
		]);

		// Uncomment the below to run the seeder
		// DB::table('posts')->insert($posts);
	}

}
