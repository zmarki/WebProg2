<?php

//ini_set("default_socket_timeout", 5000);
 $options = array(

 "location" => "http://localhost/Nefas/SOAP/cikkek.php",
 "uri" => "http://localhost/Nefas/SOAP/cikkek.php",
 'keep_alive' => false,
 array('encoding'=>'UTF-8'),
 //'trace' =>true,
 //'connection_timeout' => 5000,
 //'cache_wsdl' => WSDL_CACHE_NONE,
 );
//try {
	$kliens = new SoapClient(null, $options);
	$eredmeny="";
	$cimek =$kliens->getBlogCim();
	/*if (isset($_POST['cim']) && $_POST['cim']>0)
	{
		$blog= $kliens->getBlogALL($_POST['cim']);

	}
	

/*}
catch (SoapFault $e) {
	var_dump($e);
}*/

?>


<h2>Blogok</h2>

<form name="blogkivalasztform" action="./blogok" method="POST">
	<select class="custom-select" name="cim" onchange="javascript:blogkivalasztform.submit();"> 
		<option value="">Válasszon...</option>
		<?php
		foreach ($cimek as $cim) {
			echo '<option value="'.$cim['ID'].'">'.$cim['cim'].'</option>';
		}

		?>

	</select>

	<?php
	
	{
		echo $eredmeny;	
	}
	?>
</form>


