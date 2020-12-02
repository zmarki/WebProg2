<article class="hof">
	<h2>Hall of Fame<small> - Emberek akikre büszkék lehetünk</small></h2>	
</br>
	<table class="table table-hover">
		<thead></thead>
			<tbody>
				<tr>
					<th rowspan="3"> <img class="myImg" src="./pictures/Illy_Ferenc.jpg" onclick="myFunction(this);"> </th>
					<th> Illy Ferenc </th>
				</tr>
				<tr>
					<td rowspan="2">Francesco Illy, születéskori nevén Illy Ferenc (Temesvár, 1892. október 7. – Trieszt, 1956) magyar származású trieszti üzletember, könyvelő, feltaláló, az olasz presszókávé atyja. </br>
					1933-ban Illy megalapította az Illycaffèt, majd 1935-ben Illetta névvel levédte találmányát, a világ első automata eszpresszó kávégépét, ami egy forró gőzzel működő kávéautomata volt. Az Illetta a mai korszerű presszógépek elődjének tekinthető, mellyel az olasz presszókávét készítik.  </td>	
				</tr>
				<tr>
				</tr>
				<tr>
					<th rowspan="3"> <img class="myImg" src="./pictures/Lajos.jpg" onclick="myFunction(this);"> </th>
					<th> Horváth Lajos </th>
				</tr>
				<tr>
					<td rowspan="2"> Többszörös magyar bajnók kávékostolásban, így többször szerepelhetett a világbajnokságon. 2013-ban sikerült is megnyernie a World Cup Taster Championship-et.</br>
					Nem sokkal a gyözelem után barátiaval megalapitotta a Casino Mocca kávépörkölöt. Amely mára a legeredményesebb magyar Specilty kávépörkölönek mondhatja magát. Világszerte ismert és több europai kávézóban állandóan tartott kávé.</td>	
				</tr>
				<tr>
				</tr>
				<tr>
					<th rowspan="3"> <img class="myImg" src="./pictures/Edit.jpg" onclick="myFunction(this);" > </th>
					<th> Juhász Edit </th>
				</tr>
				<tr>
					<td rowspan="2"> A tejművész, ha elindult magyarországon Latte art kategoriában akkor biztosra vehető volt a gyözelme. Világversenyen is rendkivül jó eredménnyel teljesitett egyszer a dobogó 3dik fokára is felállhatott. <br>
					Jelenleg a Cirkusz kávézó oszlopos tagja és mellette, ha megszervezésre kerül a Latte art bajnokság akkor bíroként természetesen még részt vesz rajtuk.</td>	
				</tr>
				<tr>
				</tr>
		</tbody>
	</table>
	
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<script>

function myFunction (pict) {
	var modal = document.getElementById("myModal");
	var modalImg = document.getElementById("img01");
	var captionText = document.getElementById("caption");
	 modal.style.display = "block";
	 modalImg.src = pict.src;
	 captionText.innerHTML = pict.alt;


var span = document.getElementsByClassName("close")[0];


span.onclick = function() { 
  modal.style.display = "none";
}
}
</script>
</article>