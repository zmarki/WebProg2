<?php

$eredmeny="";

try {

	//ADATBÁZIS CSATLAKOZÁS

	$dbh = new PDO('mysql:host=localhost;dbname=wos3ko_web2', 'root', '',
 array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
	$dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

	switch ($_SERVER['REQUEST_METHOD']) {
		case 'GET':
			$sql="SELECT * FROM felhasznalok";
			$sth=$dbh->query($sql);
			$eredmeny .= "<table class=\"table table-striped\"><tr><th scope=\"col\"></th><th scope=\"col\">Családi név</th><th scope=\"col\" >Utónév</th><th scope=\"col\">Login név</th><th scope=\"col\">Kódolt jelszó</th><th scope=\"col\">Jogosultság</th></tr>";
			while($row = $sth->fetch(PDO::FETCH_ASSOC))
			{
				$eredmeny .= "<tr>";
				foreach ($row as $column) {
					$eredmeny .="<td>".$column."</td>";
				}
				$eredmeny .= "</tr>";
			}
			$eredmeny .= "</table>";


			break;
		case "POST":
				$sql = "insert into felhasznalok values (0, :vnev, :knev, :uid, :psw, :jog )";
				$sth = $dbh->prepare($sql);
				$count = $sth->execute(Array(":vnev"=>$_POST["vnev"], ":knev"=>$_POST["knev"], ":uid"=>$_POST["uid"], ":psw"=>$_POST["psw"], ":jog"=>$_POST["jog"]));
				$newid = $dbh->lastInsertId();
				$eredmeny .= "Sikeres Regisztráció bejelentkezhet";
			break;
		case "PUT":
				$data = array();
				$incoming = file_get_contents("php://input");
				parse_str($incoming, $data);
				$modositando = "id=id"; $params = Array(":id"=>$data["id"]);
				if($data['vnev'] != "") {$modositando .= ", vnev = :vnev"; $params[":vnev"] = $data["vnev"];}
				if($data['knev'] != "") {$modositando .= ", knev = :knev"; $params[":knev"] = $data["knev"];}
				if($data['uid'] != "") {$modositando .= ", uid = :uid"; $params[":uid"] = $data["uid"];}
				if($data['psw'] != "") {$modositando .= ", psw = :psw"; $params[":psw"] = sha1($data["psw"]);}
				$sql = "update felhasznalok set ".$modositando." where id=:id";
				$sth = $dbh->prepare($sql);
				$count = $sth->execute($params);
				$eredmeny .= $count." módositott sor. Azonosítója:".$data["id"];
			break;
		case "DELETE":
				$data = array();
				$incoming = file_get_contents("php://input");
				parse_str($incoming, $data);
				$sql = "delete from felhasznalok where id=:id";
				$sth = $dbh->prepare($sql);
				$count = $sth->execute(Array(":id" => $data["id"]));
				$eredmeny .= $count." sor törölve. Azonosítója:".$data["id"];
			break;

	}
}
catch (PDOExeption $e) {
	$eredmeny= $e->fetMassege();
}
echo $eredmeny;

?>