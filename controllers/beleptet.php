<?php

class Beleptet_Controller
{
	public $baseName = 'beleptet'; //meghatározni, hogy melyik oldalon vagyunk
	public function main(array $vars)
	{
		$beleptet_model= new Beleptet_Model;
		$retData = $beleptet_model->get_data($vars);
		if($retData['eredmeny'] == "ERROR")
			$this->baseName = "belepes";
		//betöltjük a nézetet
		$view = new View_Loader($this->baseName.'_main');
		//átadjuk a lekérdezett adatokat a nézetnek
		foreach($retData as $name => $value)
			$view->assign($name, $value);
	}
}

?>