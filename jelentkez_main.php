<head>

<script type="text/javascript">
	/*function checkForm() {
		var x = document.getElementById('vnev');
		var y = document.getElementById('knev');
		var id = $(this).attr("id");
		
		if (!x.value.match(/^[A-Za-záéíóúöőüűÁÉÍÓÚÖŐÜŰ]+$/) || !y.value.match(/^[A-Za-záéíóúöőüűÁÉÍÓÚÖŐÜŰ]+$/)) {
			$(this).css({
				style: "backround-color: red",
				disabled
			});
			
			//return false;
		}
		else 
		{
			//return true;
		}
	}*/
	$(document).ready(function()
	{
		$("button.button").hover(function(){
			$(this).css("backround-color: red ")
		});

			//alert("Kérem csak betüket használjon a névmezőknél!");	

	});
	
	
	


</script>
</head>
<article class="jelentkezes">
	<h1>Jelentkezés</h1>
	<form name="form1" action="<?php SITE_ROOT?>" method="post" >
	<fieldset>
	<legend><h3> Személyes adatok</h3></legend>
	
		
		<input type="text" id="vnev" name="veznev" placeholder="Vezeteknév" required>
		</br>
		<input type="text" id="knev" name="kernev" placeholder="Keresztnév" required>
		</br>
		<input type="date" name="szüldate" placeholder="Születési Dátum" required>
		</br>
		<input type="email" name="mail" placeholder="E-mail" required>
		</br>
		<input type="tel" name="tel" pattern="[0-9]{9}" placeholder="Mobiltelefon +36 nélkül" required>
		</br>
	</fieldset>
	<fieldset>
	<legend><h3>Esemény adatok</h3></legend>
		<p>Versenyek</p>
		<select name="versenyek">
		<?php foreach ($versenyek as $verseny) { ?>
			<option value= "<?php echo $verseny['value']?>"><?php echo $verseny['nev']?> </option>
		<?php }?>
		</select>

		
		<p>Titulus</p>
		<input type="radio"  name="titulus" value="versenyző" checked>Versenyző</input>
		<input type="radio"  name="titulus" value="önkentes">Önkéntes</input>
		<input type="radio"  name="titulus" value="bíró">Bíró</input></br>
		<button type="submit" id="gomb" class="button" name="sub" >Elküld</button>
	</fieldset>
	</form>
	<section>
		<p>A regisztrációs lap beküldésével elfogadom a versenyszabályzatot, a részvételi feltételeket és a SCA, WCE ide vonatkozó szabályozásait.</br></br>
		Vállalom, hogy a nevezési díjat határidőre befizetem a szervezők részére.</br></br>
		Hozzájárulok, hogy a SCA Hungary marketing célokra felhasználja a nevemet a rólam készült fotókat, videókat.</br>
		Amennyiben győztesként kerülök ki a versenyből és elfogadom a szervezők utaszási, valamit szállás támogatását, ezzel vállalom, hogy téritésmentesen a szervezők, illetve az általuk megnevezett támogatók / szponzorok rendelkezésére állok a következő Magyar bajnokság időpontjáig maximum 6 alkalommal, összeségében maximum 48 óra időintervallumban (melyben az utazás/felkészülés időtartama nem számít bele), a SCA illetve az SCA Hungary céljaival összeegyezezhető bemutatókon, rendezvényeken való aktív részvétel médiaszereplés, stb. megvalósítása céljából.</p>
	</section>
</article>
