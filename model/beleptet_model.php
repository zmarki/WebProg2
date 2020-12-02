<?php

class Beleptet_Model
{
	public function get_data($vars)
	{
		$retData['eredmeny'] = "";
		try {
			$connection = Database::getConnection();
			$sql = "select ID, vnev, knev, jog from felhasznalok where uid='".$vars['uid']."' and psw='".sha1($vars['psw'])."'";
			$stmt = $connection->query($sql);
			$felhasznalo = $stmt->fetchAll(PDO::FETCH_ASSOC);
			switch(count($felhasznalo)) {
				case 0:
					$retData['eredmeny'] = "ERROR";
					$retData['uzenet'] = "Helytelen felhasználói név-jelszó pár!";
					break;
				case 1:
					$retData['eredmény'] = "OK";
					$retData['uzenet'] = "Kedves ".$felhasznalo[0]['vnev']." ".$felhasznalo[0]['knev']."!<br><br>
					                      Jó munkát kívánunk rendszerünkkel.<br><br>
										  Az üzemeltetők";
					$_SESSION['userid'] =  $felhasznalo[0]['ID'];
					$_SESSION['userlastname'] =  $felhasznalo[0]['vnev'];
					$_SESSION['userfirstname'] =  $felhasznalo[0]['knev'];
					$_SESSION['userlevel'] = $felhasznalo[0]['jog'];
					pageMenu::setMenu();
					break;
				default:
					$retData['eredmény'] = "ERROR";
					$retData['uzenet'] = "Több felhasználót találtunk a megadott felhasználói név -jelszó párral!";
			}
		}
		catch (PDOException $e) {
					$retData['eredmény'] = "ERROR";
					$retData['uzenet'] = "Adatbázis hiba: ".$e->getMessage()."!";
		}
		return $retData;
	}
}