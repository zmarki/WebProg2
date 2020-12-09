<?php

session_start();
if(! isset($_SESSION['userid'])) $_SESSION['userid'] = 0;
if(! isset($_SESSION['userfirstname'])) $_SESSION['userfirstname'] = "";
if(! isset($_SESSION['userlastname'])) $_SESSION['userlastname'] = "";
if(! isset($_SESSION['userlevel'])) $_SESSION['userlevel'] = "1___";

include(SERVER_ROOT . 'include/dbconnect.inc.php');
include(SERVER_ROOT . 'include/page.inc.php');

$page="rolunk";
$subpage="";
$vars=array();

$request = $_SERVER['QUERY_STRING'];


if($request != "")
{
	$params = explode('/', $request);
	$page = array_shift($params); // a kért oldal neve
	
	if(array_key_exists($page, pageMenu::$menu) && count($params)>0) // Az oldal egy menüpont oldala és van még adat az url-ben
	{
		$subpage = array_shift($params); // a kért aloldal
		if(! (array_key_exists($subpage, pageMenu::$menu) && pageMenu::$menu[$subpage][1] == $menu)) // ha nem egy alolal
		{
			$vars[] = $subpage; // akkor ez egy parameter
			$subpage = ""; // és nincs aloldal
		}
		
	}
	$vars += $_POST;
	
	foreach($params as $p) // a paraméterek tömbje feltöltése
	{
		$vars[] = $p;
	}
}

$controllerfile = $page.($subpage != "" ? "_".$subpage : "");
$target = SERVER_ROOT.'controllers/'.$controllerfile.'.php';
if(! file_exists($target))
{
	$controllerfile = "error404";
	$target = SERVER_ROOT.'controllers/error404.php';
}

include_once($target);
$class = ucfirst($controllerfile).'_Controller';

if(class_exists($class))
	{ $controller = new $class; }
else
	{ die('class does not exists!'); }

$controller->main($vars);

function __autoload($className)
{
	$file = SERVER_ROOT.'model/'.strtolower($className).'.php';
	if(file_exists($file))
	{ include_once($file); }
	else
	{ die("File '$file' containing class '$className' not found."); }
}



