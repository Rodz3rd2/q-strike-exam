<?php

use Illuminate\Database\Seeder;

class MaterialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = \Faker\Factory::create();

    	$sports = ["Football", "Baseball", "Basketball", "Hockey"];

        $data = [];

        for ($i = 0; $i < 30; $i++)
        {
            $data[] = [
                'Name'  => $faker->word(2),
                'Sport' => $sports[rand(0, count($sports) - 1)],
                'Image' => $faker->word(5)
            ];
        }

        DB::table('materials')->insert($data);
    }
}
