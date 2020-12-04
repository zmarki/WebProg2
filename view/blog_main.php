<?php


//ini_set("default_socket_timeout", 5000);
 $options = array(

 "location" => "http://localhost/Nefas/SOAP/kommentSOAP.php",
 "uri" => "http://localhost/Nefas/SOAP/kommentSOAP.php",
 'keep_alive' => false,
 array('encoding'=>'UTF-8'),
 //'trace' =>true,
 //'connection_timeout' => 5000,
 //'cache_wsdl' => WSDL_CACHE_NONE,
 );
 $eredmeny="";
try
{
  $kliens = new SoapClient(null, $options);
  $kommentek =$kliens->getKomment($viewData['ID']);
 // if (isset($_POST['comment']) && $_POST['comment'] != "")
  {
 //   $kliens->pushKomment($_POST['comment'],$viewData['ID']);
  
  
  }
} catch (Exception $e) {
     
     $eredmeny=$e;
  
}
 

?>


<h1><?= $viewData['cim'] ?></h1>
<h5 class='text-left' style='color: darkred;'>Készitette:  <?= $viewData['keszitette'] ?> - <?= $viewData['date'] ?> </h5>

<div>
<?php
  echo $viewData['tartalom'];
?>
</div>
<!--blog vége-->

<!--Kommentek megjelenitése-->
<div class="container">
<h4 class="d-lg-inline-block">Kommentek</h4>
<div id="comment_section">
<?php
  if ($eredmeny!="URES")
  {
      foreach ($kommentek as $komment) {
        if (is_null($komment['készitette']))
        {
          $user="torolt Felhasználó";
        }
        else
        {
          $user=$komment['készitette'];
        }
       echo "<div class='d-lg-inline-block bg-success'>";
       echo "<h6 class='text-justify text-left' style='padding: 10px'>".  $komment["tartalom"] . "</h6>";

       echo "<h6 class='text-right' style='font-weight: bold;'>" . $user . ": " . $komment["keszites_datum"] . "</h6>";
       echo "</div></br>";
      }
    }
    else
    {
      echo "<div class='d-lg-inline-block bg-success'>";
      echo "<h5>Legyél te az első kommentelő</h5>";
      echo "</div></br>";
    }
?>
</div>



	
<!--Kommentek megjelenitése-->


<!--Kommentek írása függ a bejelentkezéstől-->
<div>
  <?php
  if ($_SESSION['userlastname'] != "")
                    {
                       
                      echo "<div class='form-group'>
                              <div class='form-group'>
                                  <form name=comment id='formcomment' action='blogok' method='post'>
                                 <label for='comment'>Komment írása:</label>
                                 <textarea class='form-control' rows='5' id='comment' name='comment' style='resize: none;''></textarea>
                                 <input name=uid type='hidden' value='".$_SESSION['userid']."'>
                                 <input name=cim type='hidden' value='".$viewData['ID']."'>
                                 <input name=date type='hidden' value=''>
                                 <input type='submit' class='btn btn-default'value='Küldés'>
                                 </form>
                              </div>
                          
                            </div>";

        }
        else
        {
          echo "<h5><small> Komment íráshoz be kell jelentkezni!</small> </h5></br>";
        }
  ?>
</div>


<!--Kommentek írása függ a bejelentkezéstől-->
