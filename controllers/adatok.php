<?php

class Adatok_Controller
{
	public $baseName = 'adatok';  //meghatározni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router által továbbított paramétereket kapja
	{
		$view = new View_Loader($this->baseName.'_main');
	}
}

?>