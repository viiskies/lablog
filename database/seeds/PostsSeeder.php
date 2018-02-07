<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'My blog post',
            'content' => 'Conetent. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, nemo.',
            'date' => '2017-02-17'

        ]);
    }
}
