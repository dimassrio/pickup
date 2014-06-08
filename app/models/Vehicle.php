<?php

class Vehicle extends \Eloquent {
	protected $fillable = ['name','description','maker_id','category_id','main_picture','passenger','price','year','owner_id','owner_type'];

	public function maker(){

		return $this->belongsTo('Maker');
	}

	public function owner(){
		if($this->owner_type =='user'){
			return $this->belongsTo('User');
		}
	}

	public function category(){
		return $this->belongsTo('Category');
	}
}