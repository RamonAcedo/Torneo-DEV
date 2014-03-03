<?php 

/**
* 
*/
class NoticiasTableSeeder extends Seeder
{
	public function run(){

		$faker = Faker\Factory::create();

		Noticia::truncate();

		foreach(range(1,30) as $index)
		{
			Noticia::create([
				'title' => $faker->sentence,
				'user_id'  => 1,
				'content' => $faker->paragraph(5),
				'img_preview' => $faker->imageUrl(300, 300)
				]);
		}

	}
}