<?php

class Singup_Model
{
	/*private $result="";
	protected $url=REST_ROOT;

	/*public function __construct($vars)
	{
		$_POST['vnev'] = trim($vars['vnev']);
		$_POST['knev'] = trim($vars['kven']);
		$_POST['uid'] = trim($vars['uid']);
		$_POST['psw'] = trim($vars['psw']);
		$_POST['repsw'] = trim($vars['repsw']);

		if($_POST['vnev'] != "" && $_POST['knev'] != "" && $_POST['uid'] != "" && $_POST['psw'] != "" && $_POST['psw']==$_POST['repsw'])
		{
			$data= Array("vnev" => $_POST["vnev"], "knev" => $_POST['knev'], "uid" => $POST["uid"], "psw" =>sha1($_POST["pse"]) );
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_buld_query($data));
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$this->result = curl_exec($ch);
			curl_close($ch);
		}
		else
			$this->result="Hiba: Hiányos adatok!";

	}*/
	public function post_data($vars)
	{
		$result="";
		$url=REST_ROOT;
		if ($vars)
		{
			$_POST['vnev'] = trim($vars['vnev']);
		$_POST['knev'] = trim($vars['kven']);
		$_POST['uid'] = trim($vars['uid']);
		$_POST['psw'] = trim($vars['psw']);
		$_POST['repsw'] = trim($vars['repsw']);

		if($_POST['vnev'] != "" && $_POST['knev'] != "" && $_POST['uid'] != "" && $_POST['psw'] != "" && $_POST['psw']==$_POST['repsw'])
		{
			$data= Array("vnev" => $_POST["vnev"], "knev" => $_POST['knev'], "uid" => $POST["uid"], "psw" =>sha1($_POST["pse"]) );
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_buld_query($data));
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$result = curl_exec($ch);
			curl_close($ch);
		}
		else
			$result="Hiba: Hiányos adatok!";
		}
		else
			$result="Szar az egész!";
		
		return $result;
	}
}
