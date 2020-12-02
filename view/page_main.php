<!DOCTYPE html> 
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
        <title>Coffee Career - A kávé nem csak a kezdet</title>
        <!-- BOOTSTRAP-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!--Bootstrap Vége-->

        <link rel="stylesheet" type="text/css" href="<?php //echo SITE_ROOT?>./css/main_style.css">
        <link rel="icon" href="<?php echo SITE_ROOT?>/pictures/coffee.png" sizes="16x16" type="image/png" />
       
    </head>
    <body>
        <header>
        <a href="."> <h1 id="coffee">Coffee</h1> <img src="./pictures/coffee-beans64.png" alt="kv" /> <h1 id="Career">  Career </h1></a>
        <p> "a kávé nem csak a kezdet!" </p>
        
        </header>
    	<nav> 

       <!--  ITT majd az adatbázisból beolvasásra kell cserélni  -->
       
       <div>
       <!--  Menü készitése  -->
       
            <?php echo pageMenu::getMenu($viewData['selectedItems']); ?>
           
           
           
           
                 <?php
                    if ($_SESSION['userlastname'] != "")
                    {
                        echo "
                        <form form class='form-inline' action=" .SITE_ROOT."kilepes method='post'>
                                <input class='form-control' type='submit' id='login' name='logout' value='Logout'>
                            </form>";                            

                    }
                    else 
                    {
                        echo "<form class='form-inline' id='loginform' method='post'>
                  <div class='input-group'>
                    
                    <input type='text'  class='form-control' id='uidlogin' name='uid'  placeholder='Username'>
                    <input type='password' class='form-control' id='pswlogin' name='psw' placeholder='Password'>
                    <input type='submit'  class='form-control' id='butlogin' name='butlog' value='Login'>
                  
                </form>
                <form class='form-inline' action='".SITE_ROOT."regisztracio' method='post'>
                  <div class='input-group'>
                    <input type='submit'  class='form-control' id='butlogin' name='butlog' value='Sign Up'></div>
                  </form></div>";
                    }
                ?>

            
          </ul>
 
          </div>   
        </nav>
        <!--Fix section-->
        <div class="torzs">
            <aside>
            <section>
                <h2>Idézet</h2>
                <p>
                  
                    <a href="<?php echo SITE_ROOT?>pictures/<?php $kep=rand(1,9); echo $kep; ?>.jpg">
                    <img src="<?php echo SITE_ROOT?>pictures/<?php echo $kep ?>.jpg" width="200" height="200">
                    </a>
                </p>

            </section>

        </aside>
        </div>
        <section class="page">


            <!-- Itt includáljuk a kiválasztott menünek megfelelő oldal adatait -->

            <?php
               
                if($viewData['render']) include($viewData['render']); ?>


        </section>
    </body>

    <!--AJAX megvalositás Beléptetésre-->
    <script type="text/javascript">
      $(document).ready(function() {
        $('#butlogin').on('click', function()
        {
          var uid=$('#uidlogin').val();
          var psw=$('#pswlogin').val();
          if(uid!="" && psw!="") {
            $.ajax({
              url: "/Nefas/beleptet",  //beléptet controller-re irányitás
              type: "POST",
              data: {
                uid: uid,
                psw: psw
              },
              cache: false,
              /*succes: function(dataResult){
                var dataResult = JSON.parse(dataResult);
                    if(dataResult.statusCode==200){
                      location.href = "welcome.php";            
                    }
                    else if(dataResult.statusCode==201){
                      $("#error").show();
                      $('#error').html('Invalid EmailId or Password !');
                    }
               }*/
            });
          }
          else{
              alert('Mindkét mező megadása kötelező!');
            }
        });

      });
    </script>
    <footer>
        &copy; 2020-21/1.félév - Web-programozás 2. | Beadandó | Neptun: WOS3KO
    </footer>
</html>
