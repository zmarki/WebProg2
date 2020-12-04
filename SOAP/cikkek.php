<?php

/**
 * 
 */
class Cikkek   
{
	
	public function getBlogCim()
	{	

		$eredmeny = array();
		try
		{
			$dbh = new PDO('mysql:host=localhost;dbname=wos3ko_web2', 'root', '',
 array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
			$sql = "select ID, cim from blogok";
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

	/*public function getBlogALL($id)
	{
		$eredmeny=array();
		try {
			$dbh = new PDO('mysql:host=localhost;dbname=wos3ko_web2', 'root', '',
 array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
			$sql="select ID, cim, tartalom, készites_datuma, keszitette from blog where ID = :id";
			$sth = $dbh->prepare($sql);
			$sth->execute(array(":id" => $id));
			$eredmeny=$sth->fetchAll(PDO::FETCH_ASSOC);

			
		} catch (PDOExcetion $e) {
			return "Csatlakozási hiba: ". $e->getMessage();
		}
	}*/


}
$options = array(
"uri" => "http://localhost/Nefas/SOAP/cikkek.php");
// SoapServer: The SoapServer class provides a server for the SOAP protocols.
// It can be used with or without a WSDL service description.
// http://php.net/manual/en/class.soapserver.php
// null: bemenetként nem használunk wsdl fájlt
$server = new SoapServer(null, $options);
$server->setClass('Cikkek');
$server->handle();

?>