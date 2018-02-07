<?php

use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * php artisan make:seeder CommentsSeeder
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i < 3; $i++) { 
            DB::table('comments')->insert([
                'name' => $faker->name,
                'content' => $faker->paragraph,
                'date' => '2017-01-17',
                'post_id' => 2
            ]);
        }
    }
}


