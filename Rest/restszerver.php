<?php

$eredmeny="";

try {

	//ADATBÁZIS CSATLAKOZÁS

	$dbh = new PDO('mysql:host=localhost;dbname=web2', 'root', '',
 array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
	$dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

	switch ($_SERVER['REQUEST_METHOD']) {
		case 'GET':
			$sql="SELECT * FROM felhasznalok";
			$sth=$dbh->query($sql);
			$eredmeny .= "<table class=\"table table-striped\"><tr><th scope=\"col\"></th><th scope=\"col\">Családi név</th>< scope=\"col\"th>Utónév</th><th scope=\"col\">Login név</th><th scope=\"col\">Kódolt jelszó</th></tr>";
			while($row = $sth->fetch(PDO::FETCH_ASSOC))
			{
				$eredmeny .= "<tr>";
				foreach ($row as $column {
					$eredmeny .="<td>".$column."</td>";
				}
				$eredmeny .= "</tr>";
			}
			$eredmeny .= "</table>";


			break;
		
		default:
			# code...
			break;
	}
}

?>