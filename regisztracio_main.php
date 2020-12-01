<!-- BOOTSTRAP-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!--Bootstrap Vége-->
        <link rel="stylesheet" type="text/css" href="./css/main_style.css">
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
</br></br>
	<form name="form1" class="form-horizontal" method="post">
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
       			   <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
      			   <label class="form-check-label" for="gridRadios1">Látogató</label>
      			</div>
      			<div class="form-check">
         			<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
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
				<button type="button" id="submit" class="btn btn-success" disabled="disabled" >Küldés</button>
				
			</div>
		</fieldset>
		</form>	
	<section>
		<p>Amennyiben baristaként regisztrál őn jogosult lesz Blog írására!</p>
	</section>
	
