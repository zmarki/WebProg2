<?php

class Jelentkez_Controller
{
	public $baseName='jelentkez';
	public function main(array $vars) //a router-től kapjuk meg a paramétereket
	{
		//betöltjük a rolunk nézetet
		$view = new View_Loader($this->baseName."_main");
	}

}