<?php

class Category extends \Eloquent {
	protected $fillable = [];

	public static function array_categories(){
		$categoriess = Category::all();
		$result = array();
		foreach ($categoriess as $categories) {
			$result[$categories->id] = $categories->name;
		}
		return $result;
	}
}