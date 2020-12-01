
<h2>Adatok</h2>
<div>
<!--REST GET methodus szerver által letöltött személyes adatok-->

<table class="table table-striped"><tr><th scope="col">ID</th><th scope="col">Családi név</th><th scope="col">Utónév</th><th scope="col">Login név</th><th scope="col">Kódolt jelszó</th></tr><tr><td>ID</td><td>".$column."</td>
	<td >".$column."</td><td >".$column."</td><td >".$column."</td></tr>
</table>
</div>
<h3>Módosítás</h3>
<div class="form-check">
	<div class="col-sm-10">
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
		<input type="submit" id="submit" value="Küldés"/>

	</div>
	</br>
</div>	