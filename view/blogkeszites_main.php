<?php
$url = SITE_ROOT."Rest/RestBlog.php";
$result = "";
if(isset($_POST['cim']))
{
  $_POST['cim'] = ($_POST['cim']);
  $_POST['tartalom'] = ($_POST['tartalom']);
  $_POST['date'] = date("Y/m/d G:i");
  $_POST['uid'] = $_SESSION['userid'];
  

  /*if( $_POST['cim'] != "" && $_POST['tartalom'] != "" && $_POST['date'] != "" && $_POST['uid'] != "")
  {*/
      $data = Array("cim" => $_POST["cim"], "tartalom" => $_POST["tartalom"], "date" => $_POST["date"],  "uid" => $_POST["uid"]);
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_POST, "POST");
      curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $result = curl_exec($ch);
      curl_close($ch);
 /* }*/
}
?>
<script src="https://cdn.ckeditor.com/4.11.4/standard-all/ckeditor.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<h2>Blog készítés</h2>
<h5 style="color:green"><?= $result ?><h5>
<div>
	<form name="blog" id="bolg" method="POST">
		<label>Blog címe:</label></br>
		<input type="text" name="cim" id="blog_cim"></br>
		<label>Tartalom:</label></br>
		<textarea id="editor" name="tartalom">Ide lehet beírni a Blog tartalmát</textarea>
		<input type="submit" name="blog_button" value="Küldés"> 
	</form>
</div>
 

                <script>
                     CKEDITOR.replace('tartalom');
                     CKEDITOR.config.entities_latin = false;
                </script>

