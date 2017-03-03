<?php

use Illuminate\Database\Seeder;

class MaterialOptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$faker = \Faker\Factory::create();

	    $data = [];

	    for ($i = 0; $i < 30*5; $i++)
	    {
	        $data[] = [
	            'MaterialId' => rand(1, 30),
	            'Name'  => $faker->word(2),
	        ];
	    }

        DB::table('material_options')->insert($data);
    }
}
