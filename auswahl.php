<?php
session_start();
  if(isset($_SESSION["id"])) unset($_SESSION["id"]);
  session_destroy();

  require_once('System/data.php');
//require_once('System/security.php');

  $error = false;
  $error_msg = "";
  $success = false;
  $success_msg = "";

if(isset($_POST['hotelauswahl-submit'])){
  if(!empty($_POST['sterne']) && !empty($_POST ['ort']) && !empty($_POST ['aktivitaet'])){

      $success_msg = "Sie haben sich erfolgreich registriert.<br/>";

    }else{
      $error = true;
      $error_msg .="Es gibt leider kein Hotel mit diesen Bedingungen";
    }
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
    <div class="col-sm-8"> <h3> Folgendes Angebot wurde auf Ihre Auswahl zugeschnitten. <br> Klicken Sie den Kauf Button, um ihr Ferienabenteuer definitiv zu machen.</h3> </div>
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
        <div class="funkyradio-default">
            <input type="checkbox" name="checkbox" id="hotel1" checked/>
            <label for="hotel1">First Option default</label>
        </div>
        <div class="funkyradio-primary">
            <input type="checkbox" name="checkbox" id="hotel2" checked/>
            <label for="hotel2">Second Option primary</label>
        </div>
        <div class="funkyradio-success">
            <input type="checkbox" name="checkbox" id="hotel3" checked/>
            <label for="hotel3">Third Option success</label>
        </div>
        <div class="funkyradio-danger">
            <input type="checkbox" name="checkbox" id="hotel4" checked/>
            <label for="hotel4">Fourth Option danger</label>
        </div>
        <div class="funkyradio-warning">
            <input type="checkbox" name="checkbox" id="hotel5" checked/>
            <label for="hotel5">Fifth Option warning</label>
        </div>
        <div class="funkyradio-info">
            <input type="checkbox" name="checkbox" id="hotel6" checked/>
            <label for="hotel6">Sixth Option info</label>
        </div>
    </div>
</div>

<div class="col-md-6">
     <h4>Aktivitvät</h4>

    <div class="funkyradio">
        <div class="funkyradio-default">
            <input type="checkbox" name="checkbox" id="aktivitaeten1" checked/>
            <label for="aktivitaeten1">First Option default</label>
        </div>
        <div class="funkyradio-primary">
            <input type="checkbox" name="checkbox" id="aktivitaeten2" checked/>
            <label for="aktivitaeten2">Second Option primary</label>
        </div>
        <div class="funkyradio-success">
            <input type="checkbox" name="checkbox" id="aktivitaeten3" checked/>
            <label for="aktivitaeten3">Third Option success</label>
        </div>
        <div class="funkyradio-danger">
            <input type="checkbox" name="checkbox" id="aktivitaeten4" checked/>
            <label for="aktivitaeten4">Fourth Option danger</label>
        </div>
        <div class="funkyradio-warning">
            <input type="checkbox" name="checkbox" id="aktivitaeten5" checked/>
            <label for="aktivitaeten5">Fifth Option warning</label>
        </div>
        <div class="funkyradio-info">
            <input type="checkbox" name="checkbox" id="aktivitaetenx6" checked/>
            <label for="aktivitaeten6">Sixth Option info</label>
        </div>
    </div>
</div>
</div>

<!-- Start Button (default and split) -->
<br>
<br>


<div class="container">
<div class="dropdown_ort">
<div class="btn-group" role="group" aria-label="...">
  <button type="button" class="btn btn-default btn-lg">Start</button>
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
