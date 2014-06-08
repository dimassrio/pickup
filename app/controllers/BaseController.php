<?php

class BaseController extends Controller {
	
	public $data;

	public function __construct(){
		$this->data['pagetitle1'] = "PAGETITLE";
		$this->data['pagetitle2'] = "PAGETITLE";
		$this->data['no'] = 1;
	}
	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
