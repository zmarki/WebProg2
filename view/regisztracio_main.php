<?php
$url = SITE_ROOT."Rest/restszerver.php";
$result = "";
if(isset($_POST['vnev']))
{
  // Felesleges szóközök eldobása
  $_POST['vnev'] = trim($_POST['vnev']);
  $_POST['knev'] = trim($_POST['knev']);
  $_POST['uid'] = trim($_POST['uid']);
  $_POST['psw'] = trim($_POST['psw']);
  $_POST['jog'] = trim($_POST['jog']);

  if( $_POST['vnev'] != "" && $_POST['knev'] != "" && $_POST['uid'] != "" && $_POST['psw'] != "" && $_POST['jog'] != "")
  {
      $data = Array("vnev" => $_POST["vnev"], "knev" => $_POST["knev"], "uid" => $_POST["uid"], "psw" => sha1($_POST["psw"]), "jog" => $_POST["jog"]);
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_POST, "POST");
      curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $result = curl_exec($ch);
      curl_close($ch);
  }
}

?>
       <script type='text/javascript'>
       	function kattintas(){
       		if ($(this).is(":checked")){
       			$("button").removeAttr("disabled");
       		}
       		else {
       			
       			$("button").attr("disabled", "disabled");
       		}
       	}

$(document).ready(function(){
	$("#GDPR").change(kattintas);
    
});
</script>

<h1>Regisztráció</h1>
<h5 style="color:green"><?= $result ?><h5>

</br></br>
<div>
	<form name="form1" id="form1"  class="form-horizontal" method="post">
		<fieldset class="form-group">
			 <div class="row">
		<legend class="col-form-label col-sm-2 pt-0"><h3> Személyes adatok</h3></legend>
			 <div class="col-sm-10">
        <div class="form-check">
			<input type="text" class="form-control" id="exampleInputName2" name="vnev" placeholder="Vezeteknév" required>
			</br>
			<input type="text" class="form-control" id="exampleInputName2" name="knev" placeholder="Keresztnév" required>
			</br>
			<input type="text" class="form-control" id="exampleInputName2" name="uid" placeholder="Felhasználó" required>
			</br>
			<input type="password" class="form-control" id="exampleInputPassword1" name="psw" placeholder="Jelszó" required>
			</br>
			<input type="password"class="form-control" id="exampleInputPassword1" name="repsw" placeholder="Jelszó mégegyszer" required>
			</br>
			</div>
			</div>	
		</fieldset>
		<fieldset class="form-group">
			 <div class="row">
		<legend class="col-form-label col-sm-2 pt-0"><h3>Tulajdoságok</h3></legend>
			 <div class="col-sm-10">
			 	<div class="form-check">
			 		</br>
			 		<h4>Tipus</h4>
       			   <input class="form-check-input" type="radio" name="jog" id="gridRadios1" value="_1__" checked>
      			   <label class="form-check-label" for="gridRadios1">Látogató</label>
      			</div>
      			<div class="form-check">
         			<input class="form-check-input" type="radio" name="jog" id="gridRadios2" value="__1_">
       			    <label class="form-check-label" for="gridRadios2">Barista</label>
      			</div>
      		<!--	<div class="form-check">
      				<h4>Level</h4>
      				<input class="form-check-input" type="radio" name="gridRadios1" id="gridRadios1" value="option1" checked>
      			   <label class="form-check-label" for="gridRadios1">Hobby</label>
      			</div>
      			<div class="form-check">
         			<input class="form-check-input" type="radio" name="gridRadios1" id="gridRadios2" value="option2">
       			    <label class="form-check-label" for="gridRadios2">Home Barista</label>
      			</div>
      			<div class="form-check">
         			<input class="form-check-input" type="radio" name="gridRadios1" id="gridRadios2" value="option2">
       			    <label class="form-check-label" for="gridRadios2">Barista</label>
      			</div>
      			<div class="form-check">
         			<input class="form-check-input" type="radio" name="gridRadios1" id="gridRadios2" value="option2">
       			    <label class="form-check-label" for="gridRadios2">Head Barista</label>
      			</div>-->

      			

      		</div>
      	</br>
      		<div class="col-sm-2"><h3>Nyilatkozat</h3></div>
    		<div class="col-sm-10">
			<div class="form-check">
				</br>
	      		<input class="form-check-input" type="checkbox" id="GDPR" name="GDPR">
				<label class="form-check-label" for="GDPR"> Elfogadom az adatvédelmi nyilatkozatot</label><br>
				
				
			</div>
		</fieldset>
		</form>
    </div>	
		<button type="submit" id="reg" form="form1" class="btn btn-success" disabled="disabled" >Küldés</button>
	<section>
		<p>Amennyiben baristaként regisztrál őn jogosult lesz Blog írására!</p>
	</section>
	
