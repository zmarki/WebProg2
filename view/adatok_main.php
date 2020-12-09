<?php
$url = "http://localhost/Nefas/Rest/restszerver.php";
$result = "";
if (isset($_POST['id']))
{
	$_POST['id']= trim($_POST['id']);
	$_POST['vnev']= trim($_POST['vnev']);
	$_POST['knev']= trim($_POST['knev']);
	$_POST['uid']= trim($_POST['uid']);
	$_POST['psw']= trim($_POST['psw']);

	if ($_POST['id'] >= 1 && ($_POST['vnev'] != "" || $_POST['knev'] != "" || $_POST['uid'] != "" || $_POST['psw'] != ""))
	{
		$data = Array("id" => $_POST["id"], "vnev" => $_POST["vnev"], "knev" => $_POST["knev"], "uid" => $_POST["uid"], "psw" => $_POST["psw"]);
	    $ch = curl_init($url);
	    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
	    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    $result = curl_exec($ch);
	    curl_close($ch);
    }
    elseif ($_POST['id']=="") {
    	$result= "Hiba hiányos ID adat!";
    }

    elseif ($_POST['id'] >= 1) {
    	$data = Array("id" => $_POST["id"]);
	    $ch = curl_init($url);
	    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
	    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    $result = curl_exec($ch);
	    curl_close($ch);
    }
    else
    {
    	echo "Hiba: Rossz azonosító (Id): ".$_POST['id']."<br>";
    }


}

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$tabla = curl_exec($ch);
curl_close($ch);
	
?>
<?= $result ?>
<h2>Adatok</h2>
<div>
<!--REST GET methodus szerver által letöltött személyes adatok-->
<?= $tabla ?>

</div>

<!--Rest -->
<h3>Módosítás</h3>
<div class="form-check">
	<div class="col-sm-10">
		<form method="post">
		<input type="text" class="form-control" id="exampleInputName2" name="id" placeholder="ID">
		</br>
		<input type="text" class="form-control" id="exampleInputName2" name="vnev" placeholder="Vezeteknév" >
		</br>
		<input type="text" class="form-control" id="exampleInputName2" name="knev" placeholder="Keresztnév" >
		</br>
		<input type="text" class="form-control" id="exampleInputName2" name="uid" placeholder="Felhasználó">
		</br>
		<input type="password" class="form-control" id="exampleInputPassword1" name="psw" placeholder="Jelszó" >
		</br>
		<input type="submit" id="submit" value="Küldés"/>
	</form>

	</div>
	</br>
</div>	