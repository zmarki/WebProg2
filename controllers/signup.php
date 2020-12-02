<?php

class Signup_Controller
{
	public $baseName = '';//Regisztráció küldése
	public function main(array $vars)
	{
		$signup_model= new Signup_Model();
		$result=$signup_model->post_data($vars);
		//$view = View_Loader($this->baseName.'_main');
		$view->singup($result);
	}
}


