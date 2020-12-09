<?php

class Blogok_Controller
{
	public $baseName = 'blog'; //meghatározni, hogy melyik oldalon vagyunk
	public function main(array $vars)
	{
		if (isset($vars['comment']))
		{
			$blog_model= new Blogkivalaszt_Model;
			$retData = $blog_model->push_komment($vars);
		}
		else
		{
		$blog_model= new Blogkivalaszt_Model;
		$retData = $blog_model->get_data($vars);
		if($retData['eredmeny'] == "ERROR")
			$this->baseName = "blogkivalaszt";
		//betöltjük a nézetet
		$view = new View_Loader($this->baseName.'_main');
		//átadjuk a lekérdezett adatokat a nézetnek
		foreach($retData as $name => $value)
			$view->assign($name, $value);
		}
	}
}

?>