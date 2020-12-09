<?php

/**
 * 
 */
class Comment   
{

	
	public function getKomment($ID)
	{	

		$eredmeny = array();
		try
		{
			$dbh = new PDO('mysql:host=localhost;dbname=wos3ko_web2', 'root', '',
 array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
			$sql = "select ID, tartalom, keszites_datum, készitette, bloghoz from kommentek where bloghoz='".$ID."'";
			$sth = $dbh->prepare($sql);
			$sth->execute(array());
			$eredmeny= $sth->fetchALL(PDO::FETCH_ASSOC);
		}
		catch(PDOExcetion $e)
		{
			return "Csatlakozási hiba: ". $e->getMessage();
		}

		return $eredmeny;

	}

	
}
$options = array(
"uri" => "http://localhost/Nefas/SOAP/kommentSOAP.php");
// SoapServer: The SoapServer class provides a server for the SOAP protocols.
// It can be used with or without a WSDL service description.
// http://php.net/manual/en/class.soapserver.php
// null: bemenetként nem használunk wsdl fájlt
$server = new SoapServer(null, $options);
$server->setClass('Comment');
$server->handle();

?>