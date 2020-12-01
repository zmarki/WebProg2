<!-- BOOTSTRAP-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!--Bootstrap Vége-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!--A kiválasztott blog megjelenitése-->
<?php

if (isset($_POST['blog_cim']))
{
	$blog_cim=$_POST['blog_cim'];
	$blog_text=$_POST['blog_text'];
}


?>


<title><?php echo $blog_cim ?></title>
<div>
	<?php
	echo $blog_text;
?>

<h5 class='text-left' style='color: darkred;'>Készitette:  "név" - "dátum" </h5>
<!--blog vége-->

<!--Kommentek megjelenitése-->
<div class="container">
<h4 class="d-lg-inline-block">Kommentek</h4>
<div id="comment_section">
	<div class='d-lg-inline-block bg-success'>
		<h6 class='text-justify text-left' style='padding: 10px'>Komment szövege</h6>
		<h6 class='text-right' style='font-weight: bold;'> "Felhasználó" - "Dátum"</h6>
	</div>
</div>
<!--Kommentek megjelenitése-->


<!--Kommentek írása függ a bejelentkezéstől-->
<div>
	<div class="form-group">
              <div class="form-group">
                <label for="comment">Komment írása:</label>
                <textarea class="form-control" rows="5" id="comment" name="comment" style="resize: none;"></textarea>
              </div>
              <button class="btn btn-default" onclick="commentSubmitValidate()">Küldés</button>
           </div>
          </div>
</div>
<!--Kommentek írása függ a bejelentkezéstől-->
