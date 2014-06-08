<?php

class Maker extends \Eloquent {
	protected $fillable = [];

	public static function array_makers(){
		$makers = Maker::all();
		$result = array();
		foreach ($makers as $maker) {
			$result[$maker->id] = $maker->name;
		}
		return $result;
	}
}