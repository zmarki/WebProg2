<?php

class Regisztracio_Controller
{
	public $baseName = 'regisztracio';  //meghatározni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router által továbbított paramétereket kapja
	{
		$view = new View_Loader($this->baseName.'_main');
	}
}

?>