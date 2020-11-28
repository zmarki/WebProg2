<h1>Regisztráció</h1>
	<?=$result?>
	<form name="form1" method="post" onsubmit="return checkForm()">
		<fieldset>
		<legend><h3> Személyes adatok</h3></legend>
			
			<input type="text" id="vnev" name="vnev" placeholder="Vezeteknév" required>
			</br>
			<input type="text" id="knev" name="knev" placeholder="Keresztnév" required>
			</br>
			<input type="text" id="uid" name="uid" placeholder="Felhasználó" required>
			</br>
			<input type="password" name="psw" placeholder="Jelszó" required>
			</br>
			<input type="password" name="repsw" placeholder="Jelszó mégegyszer" required>
			</br>	
		</fieldset>
		<fieldset>
		<legend><h3>Tulajdonságok</h3></legend>
			<p>Tipus</p>
			<input type="radio"  name="titulus" value="versenyző" checked>Látogató</input>
			<input type="radio"  name="titulus" value="önkentes">Barista</input>
			<p>Level</p>
			<input type="radio"  name="level" value="versenyző" checked>Home Barista</input>
			<input type="radio"  name="level" value="önkentes">Barista</input>
			<input type="radio"  name="level" value="önkentes">Head Barista</input></br>
			<input type="checkbox" id="GDPR" name="GDPR" value="true">
			<label for="GDPR"> Elfogadom az adatvédelmi nyilatkozatot</label><br>--->
			<button type="submit" name="sub" >Elküld</button>
		</fieldset>
	</form>
	<section>
		<p>Amennyiben őn Baristaként vagy Head Baristaként regisztrál jogosúlt lesz Blog irásár, de a regisztrációja csak az Admin jóváhagyását követve lesz érvényes!</p>
	</section>
