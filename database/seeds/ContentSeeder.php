<?php

use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
             for ($i = 0; $i < 50; $i++){
	      DB::table('contents')->insert([ //,
                 'username' => $faker->username,
                 'text' => $faker->text,
                 'created_at' =>  $faker->dateTimeThisDecade($max = 'now', $timezone = null)->format('Y-m-d H:i:s'),
             ]);
	     }
    }
}
