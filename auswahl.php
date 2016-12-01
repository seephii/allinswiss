<?php
session_start();
  if(isset($_SESSION["id"])) unset($_SESSION["id"]);
  session_destroy();

  require_once('system/data.php');
  require_once('system/security.php');

  $error = false;
  $error_msg = "";
  $success = false;
  $success_msg = "";

  if(isset($_GET['hotelauswahl-submit'])){
        $sterne = filter_data($_GET['sterne']); // dieses filter_data muss nun überall eingefügt werden. (also überall bei $POST?)
        $ortschaft = filter_data($_GET['id_ort']);
        $dienstleister = filter_data($_GET['id_dienstleister']);

        $hotel_result = hotelauswahl($sterne, $ortschaft);
        $dienstleister_result = dienstleisterauswahl($dienstleister);

        $row_count = mysqli_num_rows($hotel_result);


     }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Auswahl</title>

    <!-- Bootstrap -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!--Navigation-->
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">All-in-Swiss</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="auswahl.php"> Hotelauswahl <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="login.php"> Login <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="benutzer.php"> Benutzer <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="warenkorb.php"> Warenkorb <span class="sr-only">(current)</span></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="hello_text">
<div class="container">
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8"> <h3> Folgendes Angebot wurde auf Ihre Auswahl zugeschnitten. <br> Klicken Sie Speichern, um ihr Ferienabenteuer definitiv zu machen.</h3> </div>
    <div class="col-sm-2"></div>
  </div>
</div>
</div>

<br>
<br>
<!-- /.Checkboxen von http://bootsnipp.com/snippets/featured/funky-radio-buttons-->
<div class="container">
  <div class="col-md-6">
     <h4>Hotels</h4>

    <div class="funkyradio">

          <?php
          /*Schlaufe, damit alle Sterne abgefragt werden*/
          while($row = mysqli_fetch_assoc($hotel_result))
          {
          ?>
          <div class="funkyradio-default">
            <input type="checkbox" name="hotels[]" id="hotel-<?php $row["id_hotel"]; ?>" />
          <!-- Option kommt in die Schlaufe, damit alles untereinander angezeigt wird (nur Echo in Option)-->
            <label for="hotel-<?php $row["id_hotel"];?>"><?php echo ($row["hotelname"]);
            ?></label>
          </div>
          <?php
          }
          if($row_count == 0){
          echo "Leider konnten wir kein Hotel zu diesen Bedingungen finden. <br/>";
         }
          ?>
    </div>
</div>

<div class="col-md-6">
     <h4>Aktivitvät</h4>

     <div class="funkyradio">

           <?php
           /*Schlaufe, damit alle Sterne abgefragt werden*/
           while($row = mysqli_fetch_assoc($dienstleister_result))
           {
           ?>
           <div class="funkyradio-default">
             <input type="checkbox" name="aktivitaeten[]" id="aktivitaet-<?php $row["id_aktivitaet"]; ?>" />
           <!-- Option kommt in die Schlaufe, damit alles untereinander angezeigt wird (nur Echo in Option)-->
             <label for="aktivitaet-<?php $row["id_aktivitaet"]; ?>"><?php echo ($row["aktivitaet"]); ?></label>
           </div>
           <?php
         }
         if($row_count == 0){
         echo "Leider konnten wir keine Aktivitäten zu diesen Bedingungen finden. <br/>";
        }
           ?>
     </div>
</div>
</div>

<!-- Start Button (default and split) -->
<br>
<br>


<div class="container">
<div class="dropdown_ort">
<div class="btn-group" role="group" aria-label="...">
  <button type="button" class="btn btn-default btn-lg">Speichern</button>
</div>
</div>
</div>
<br>
<br>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>

</html>
