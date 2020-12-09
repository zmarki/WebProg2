<?php

class Rolunk_Controller
{
	public $baseName='rolunk';
	public function main(array $vars) //a router-től kapjuk meg a paramétereket
	{
		//betöltjük a rolunk nézetet
		$view = new View_Loader($this->baseName."_main");
	}

}