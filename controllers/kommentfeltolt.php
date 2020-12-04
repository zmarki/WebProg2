<?php

class Kommentfeltolt_Controller
{
	public $baseName = 'kommentfeltolt'; //meghatározni, hogy melyik oldalon vagyunk
	public function main(array $vars)
	{
		$blog_model= new Komment_Model;
		$blog_model->push_data($vars);

		return 0;
		
	}
}

?>