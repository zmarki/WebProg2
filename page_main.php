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
        

        <link rel="stylesheet" type="text/css" href="<?php //echo SITE_ROOT?>./css/main_style.css">
        <link rel="icon" href="<?php echo SITE_ROOT?>/pictures/coffee.png" sizes="16x16" type="image/png" />
       
    </head>
    <body>
        <header>
        <a href="."> <h1 id="coffee">Coffee</h1> <img src="./pictures/coffee-beans64.png" alt="kv" /> <h1 id="Career">  Career </h1></a>
        <p> "a kávé nem csak a kezdet!" </p>
        
        </header>
    	<nav>  <!--  ITT majd az adatbázisból beolvasásra kell cserélni  -->


            <ul class="nav nav-tabs">
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

             
        </nav>
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

            <?php include('rolunk_main.php'); ?>


        </section>
    </body>
    <footer>
        &copy; 2020-21/1.félév - Web-programozás 2. | Beadandó | Neptun: WOS3KO
    </footer>
</html>
