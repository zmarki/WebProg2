<?php

$eredmeny="";

try {

	//ADATBÁZIS CSATLAKOZÁS

	$dbh = new PDO('mysql:host=localhost;dbname=wos3ko_web2', 'root', '',
 array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
	$dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

switch ($_SERVER['REQUEST_METHOD']) {
	case "POST":
				$sql = "insert into blogok values (0, :cim, :tartalom, :keszites_datuma, :keszitette )";
				$sth = $dbh->prepare($sql);
				$count = $sth->execute(Array(":cim"=>$_POST["cim"], ":tartalom"=>$_POST["tartalom"], ":keszites_datuma"=>$_POST["date"], ":keszitette"=>$_POST["uid"]));
				$newid = $dbh->lastInsertId();
				$eredmeny .= "Sikeres Blog készités!";
			break;
	}
}			
catch (PDOExeption $e) {
	$eredmeny= $e->fetMassege();
}
echo $eredmeny;

?>