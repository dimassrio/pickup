<?php

class VehiclesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('vehicles')->delete();
		Vehicle::create(array('name'=>'CR-V','description'=>'The Honda CR-V is a compact SUV (now called crossover in North America), manufactured since 1995 by Honda.','maker_id'=>'1','category_id'=>'1','main_picture'=>'assets/uploads/vehicles/crv-2013.jpg', 'passenger'=>'7','price'=>'250000','year'=>'2013','owner_id'=>1,'owner_type'=>'user'));
		Vehicle::create(array('name'=>'AVANZA','description'=>'The Toyota Avanza is a mini MPV designed by Daihatsu. It is produced in Indonesia[5] and also contract assembled in Malaysia (under Perodua) for the first generation.','maker_id'=>'2','category_id'=>'1','main_picture'=>'assets/uploads/vehicles/avanza-2013.jpg', 'passenger'=>'7','price'=>'250000','year'=>'2013','owner_id'=>1,'owner_type'=>'user'));
		Vehicle::create(array('name'=>'FORTUNER','description'=>'The Toyota Fortuner, also known as the Toyota SW4, is a medium-sized SUV based on the Toyota Hilux. Originally assembled only in Thailand, but later also in Indonesia and other countries, the Fortuner is built on the Toyota Hilux pickup truck platform','maker_id'=>'2','category_id'=>'1','main_picture'=>'assets/uploads/vehicles/fortuner-2013.jpg', 'passenger'=>'7','price'=>'250000','year'=>'2013','owner_id'=>1,'owner_type'=>'user'));
		Vehicle::create(array('name'=>'XENIA','description'=>'Daihatsu Xenia adalah nama mobil jenis MPV yang dirancang dan diproduksi bersama oleh Astra Daihatsu Motor dan Toyota Astra Motor.','maker_id'=>'3','category_id'=>'1','main_picture'=>'assets/uploads/vehicles/xenia-2013.jpg', 'passenger'=>'7','price'=>'250000','year'=>'2013','owner_id'=>1,'owner_type'=>'user'));
	}

}