<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('categories')->delete();
		Category::create(array('id'=>1,'name'=>'SUV','description'=>'SUV atau Sport Utility Vehicle merupakan kategori mobil yang memiliki kemampuan untuk melaju di jalanan mulus maupun kasar (on and off-road). Diperuntukkan bagi anda yang senang berkendara untuk menjelajah dan mendambakan kenyamanan maksimal selama mengemudi.','picture'=>'assets/uploads/categories/20140608aFERBnpdwizI'));
		Category::create(array('id'=>2,'name'=>'Luxury Vehicle','description'=>'Mobil dengan tipe ini merupakan mobil spesial yang memiliki kenyamanan luar biasa, keamanan maksimal dan tampilan mengesankan. Sangat cocok saat-saat waktu spesial anda dengan orang penting dalam hidup anda.','picture'=>'assets/uploads/categories/20140608cmQmIo7bYX5a'));
	}

}