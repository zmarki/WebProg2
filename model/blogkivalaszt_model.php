<?php
class Blogkivalaszt_Model
{
	public function push_komment($vars)
	{
		$tartalom="valami";
		$date= date("Y/m/d G:i");
		$uid=3;
		$bloghoz=4;	
		try {	
		$dbh = new PDO('mysql:host=localhost;dbname=wos3ko_web2', 'root', '',
 array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
	$dbh->query('SET NAMES utf8 COLLATE utf8_general_ci');
	
		$sql = "insert into kommentek values (0, :tartalom, :keszites_datum, :készitette, :bloghoz )";
		$sth = $dbh->prepare($sql);
		$sth->execute(array(":tartalom" => $tartalom,
									 ":keszites_datum" => $date,
									 ":készitette" => $uid,
									 ":bloghoz" => $bloghoz ));
		$newid = $dbh->lastInsertId();
	}
	catch (PDOExeption $e) {
			$e->getMassege();
	}
	self::get_data($vars);

	}
	public function get_data($vars)
	{
		$retData['cim']="";
		$retData['tartalom']="";
		$retData['date']="";
		$retData['keszitette']="";
		$retData['eredmeny']="";

		try {
			$connection = Database::getConnection();
			$sql = "select ID, cim, tartalom, készites_datuma, keszitette from blogok where ID='".$vars['cim']."'";
			$stmt = $connection->query($sql);
			$blog = $stmt->fetchALL(PDO::FETCH_ASSOC);

			
			switch (count($blog)) {
				case 0:
					$retData['eredmeny'] = "ERROR";
					break;
				case 1:
					$retData['eredmeny'] = "OK";
					$retData['ID'] = $blog[0]['ID'];
					$retData['cim'] = $blog[0]['cim'];
					$retData['tartalom'] = $blog[0]['tartalom'];
					$retData['date'] = $blog[0]['készites_datuma'];
					$retData['keszitette'] =$blog[0]['keszitette'];
					break;
				default:
					$retData['eredmeny']="ERROR";
					break;
			}
			
		} catch (PDOExceptio $e) {
			$retData['eredmeny'] = "ERROR";
			
		}
		$sql2 = "select vnev, knev from felhasznalok where ID='".$retData['keszitette']."'";
		$stmt2 = $connection->query($sql2);
		$keszit= $stmt2->fetchALL(PDO::FETCH_ASSOC);

		$retData['keszitette'] = $keszit[0]['vnev']." ".$keszit[0]['knev'];



		return $retData;
	}
	
}


?>