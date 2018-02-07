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

        $faker = Faker\Factory::create();

        for ($i=0; $i < 50; $i++) { 
            DB::table('posts')->insert([
                'title' => $faker->name,
                'content' => $faker->paragraph,
                'date' => '2017-02-17'
            ]);
        }

        DB::table('posts')->insert([
            'title' => 'My blog post',
            'content' => 'Conetent. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, nemo.',
            'date' => '2017-02-17'

        ]);
    }
}
