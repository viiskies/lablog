<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds. 
     * 
     * php artisan db:seed --class=PostsSeeder
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();

        for ($i=0; $i < 50; $i++) { 
            DB::table('posts')->insert([
                'title' => $faker->sentence($nbWords = rand(5, 10), $variableNbWords = false),
                'content' => 
                    '<p>' . $faker->paragraph($nbSentences = 3, $variableNbSentences = true) . 
                    '</p><p>' . $faker->paragraph($nbSentences = 3, $variableNbSentences = true) .
                    '</p><p>' . $faker->paragraph($nbSentences = 3, $variableNbSentences = true) .
                    '</p><p>' . $faker->paragraph($nbSentences = 3, $variableNbSentences = true) .
                    '</p><p>' . $faker->paragraph($nbSentences = 3, $variableNbSentences = true) . '</p>',
                'date' => $faker->dateTimeBetween(
                    $startDate = '-'.  10 * (52 - $i) . ' days', 
                    $endDate = '-'. 10 * (51 - $i) . ' days', 
                    $timezone = null
                )
            ]);
        }

        // DB::table('posts')->insert([
        //     'title' => 'My blog post',
        //     'content' => 'Conetent. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, nemo.',
        //     'date' => '2017-02-17'

        // ]);
    }
}
