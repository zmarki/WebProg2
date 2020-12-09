<?php

class Versenyek_Controller
{
	public $baseName = 'versenyek';  //meghatározni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router által továbbított paramétereket kapja
	{
		$view = new View_Loader($this->baseName.'_main');
	}
}

?>