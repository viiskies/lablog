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

        for ($i=1; $i <= 50; $i++) {
            $howManyComments = rand(0, 5);
            for ($j=0; $j < $howManyComments; $j++) { 
                DB::table('comments')->insert([
                    'name' => $faker->name,
                    'content' => $faker->paragraph,
                    'date' => '2017-01-17',
                    'post_id' => $i
                ]);
            }
        }
    }
}


