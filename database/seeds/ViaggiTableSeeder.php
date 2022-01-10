<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travels;

class ViaggiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for($i=0; $i<50; $i++){
          $newTravel = new Travels(); 
          $newTravel->name=$faker->firstName();
          $newTravel->surname=$faker->lastName();
          $newTravel->data_travel=$faker->date();
          $newTravel->city=$faker->city();
          $newTravel->description=$faker->text($maxNbChars = 100);
          $newTravel->save();
      }
    }
}
