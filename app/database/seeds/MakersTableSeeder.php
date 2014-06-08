<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class MakersTableSeeder extends Seeder {

	public function run()
	{
		DB::table('makers')->delete();

		Maker::create(array('id'=>1,'name'=>'HONDA','description'=>'Honda Motor Co., Ltd. (本田技研工業株式会社 Honda Giken Kōgyō KK?, IPA: [hoɴda] ( listen) /ˈhɒndə/) is a Japanese public multinational corporation primarily known as a manufacturer of automobiles and motorcycles.','country'=>'JAPAN','picture'=>'assets/uploads/makers/honda.jpg'));
		Maker::create(array('id'=>2,'name'=>'TOYOTA','description'=>'Honda Motor Co., Ltd. (本田技研工業株式会社 Honda Giken Kōgyō KK?, IPA: [hoɴda] ( listen) /ˈhɒndə/) is a Japanese public multinational corporation primarily known as a manufacturer of automobiles and motorcycles.','country'=>'JAPAN','picture'=>'assets/uploads/makers/honda.jpg'));
		Maker::create(array('id'=>3,'name'=>'DAIHATSU','description'=>'Honda Motor Co., Ltd. (本田技研工業株式会社 Honda Giken Kōgyō KK?, IPA: [hoɴda] ( listen) /ˈhɒndə/) is a Japanese public multinational corporation primarily known as a manufacturer of automobiles and motorcycles.','country'=>'JAPAN','picture'=>'assets/uploads/makers/honda.jpg'));

	}

}