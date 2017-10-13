<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      for ($i=0; $i < 5 ; $i++) {
        DB::table('Posts')->insert([
          'title' =>$faker->sentence,
          'body' => $faker->realText($maxNbChars = 1000) ,
          'slug' =>$faker->word,
          'updated_at' => \Carbon\Carbon::now(),
          'created_at' => \Carbon\Carbon::now(),
        ]);
      } // END FOR
    }
}
