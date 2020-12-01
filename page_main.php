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
       <script type="text/javascript">
  $(document).ready(function() {
    $('#loginfotm').submit(function(e){
        e.preventDefault();
        $.ajax({
              type:"POST",
              url:'loginconnet.php',
              data: $(this).serialize(),
              succes: functon(data)
              {
                if (data === 'Login') {
                  window.location='user-page.php';
                }
                else {
                  alert('invalid login');
                }
              }
          });
    });

  });
</script>
    </head>
    <body>
        <header>
        <a href="."> <h1 id="coffee">Coffee</h1> <img src="./pictures/coffee-beans64.png" alt="kv" /> <h1 id="Career">  Career </h1></a>
        <p> "a kávé nem csak a kezdet!" </p>
        
        </header>
    	<nav> 

       <!--  ITT majd az adatbázisból beolvasásra kell cserélni  -->
       

       <!--  Menü készitése  -->


            <ul class="nav nav-tabs nav-justified" >
               <li class="nav-item"><a class="nav-link active" href="./rolunk_main.php">Rolunk</a></li>
               <li class="nav-item"><a class="nav-link" href="./versenyek_main.php">Versenyek</a></li>
               <li class="nav-item"><a class="nav-link" href="./esemenyek_main.php">Események</a></li>
               <li class="nav-item"><a class="nav-link" href="./jelentkez_main.php">Jelentkezés</a></li>
               <li class="nav-item"><a class="nav-link" href="./Hof_main.php">Hall of Fame</a></li>


               <li class="nav-item dropdown"><a class="nav-link dropdown-toggle"  data-toggle="dropdown" href="#">Blogok</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Blog 1</a>
                  <a class="dropdown-item" href="#">Blog 2</a>
                  <a class="dropdown-item" href="#">Blog 3</a>
                </div>
                 

               </li>
               <li class="nav-item dropdown"><a class="nav-link dropdown-toggle"  data-toggle="dropdown" href="#">Személyes</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="./blogkeszites_main.php">Blog készitése</a>
                  <a class="dropdown-item" href="#">Személyes adatok</a>
                </div>                 
               </li>
            
            

             
                <form class="form-inline" id="loginform" method="post">
                  <div class="input-group">
                    
                    <input type="text"  class="form-control" id='uidlogin' name="uid"  placeholder="Username">
                    <input type="password" class="form-control" id='pswlogin' name="psw" placeholder="Password">
                    <input type='submit'  class="form-control" id='butlogin' name="butlog" value='Login'>
                  </div>
                </form>  
      
          </ul>
             
        </nav>
        <!--Fix section-->
        <div class="torzs">
            <aside>
            <section>
                <h2>Idézet</h2>
                <p>
                    <a href="./pictures/<?php $kep=rand(1,9); echo $kep; ?>.jpg">
                    <img src="./pictures/<?php echo $kep ?>.jpg" width="200" height="200">
                    </a>
                </p>
            </section>

        </aside>
        </div>
        <section class="page">


            <!-- Itt includáljuk a kiválasztott menünek megfelelő oldal adatait -->

            <?php include('adatok_main.php'); ?>


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
              url: "",  //beléptet controller-re irányitás
              type: "POST",
              data: {
                uid: uid,
                psw: psw
              },
              cache: false,
              succes: function(dataResult){
                var dataResult = JSON.parse(dataResult);
                    if(dataResult.statusCode==200){
                      location.href = "welcome.php";            
                    }
                    else if(dataResult.statusCode==201){
                      $("#error").show();
                      $('#error').html('Invalid EmailId or Password !');
                    }
               }
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
