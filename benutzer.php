<?php
session_start();
if(!isset($_SESSION['id'])){
    header ("Location:index.php");
}else{
  $user_id = $_SESSION['id'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Ihre Profildaten</title>

  <!-- Bootstrap -->
  <link href="css/custom.css" rel="stylesheet">
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">


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
    <a class="navbar-brand" href=index.php>All-in-Swiss</a>
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


</head>

  <div class="zentriert">
  <div class="container">
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8"> <h3> Ihr Benutzerprofil</h3> </div>
      <div class="col-sm-2"></div>
    </div>
  </div>
  </div>
<div class="colourbenutzer">
  <div class="container">
    <div class="panel panel-default container-fluid"> <!-- fluid -->
      <div class="panel-heading row">
        <div class="col-sm-6">
            <h4>Persönliche Einstellungen</h4>
          </div>
          <!-- Button fÃ¼r die Einblendung des modalen Fensters zur Userdatenaktualisierung -->
          <div class="col-xs-6 text-right">
            <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#myModal">Profil anpassen</button>
          </div>
          <!-- /Button Userdatenaktualisierung -->
      </div>
      <div class="panel-body">
        <div class="col-sm-9">
          <!-- Profildaten des Users -->
          <dl class="dl-horizontal lead">
            <dt>Name</dt>
            <dd>Wolfgang Bock</dd>

            <!--<dt>Nutzername</dt>
            <dd>wobo</dd>-->

            <dt>E-Mail</dt>
            <dd>wolfgang.bock@htwchur.ch</dd>

          </dl>
          <!-- / Profildaten des Users -->
        </div>
      </div>
    </div>

    <!-- Modales Fenster zur Userdatenaktualisierung-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form enctype="multipart/form-data" action="profil.php" method="post">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">persoenliche Einstellungen</h4>
            </div>
            <div class="modal-body">
              <div class="form-group row">
                <label for="Vorname" class="col-sm-2 col-xs-12 form-control-label">Name</label>
                <div class="col-sm-5 col-xs-6">
                  <input  type="text" class="form-control form-control-sm"
                          id="name" placeholder="Vorname"
                          name="name" value=" <?php echo $user['name']; ?> ">
                </div>
                <div class="col-sm-5 col-xs-6">
                  <input  type="text" class="form-control form-control-sm"
                          id="prename" placeholder="Nachname"
                          name="prename" value=" <?php echo $user['prename']; ?> ">
                </div>
              </div>
              <div class="form-group row">
                <label for="Email" class="col-sm-2 form-control-label">E-Mail</label>
                <div class="col-sm-10">
                  <input  type="email" class="form-control form-control-sm"
                          id="email" placeholder="E-Mail" required
                          name="email" value=" <?php echo $user['email']; ?> ">
                </div>
              </div>
              <div class="form-group row">
                <label for="Passwort" class="col-sm-2 form-control-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control form-control-sm" id="password" placeholder="Passwort" name="password">
                </div>
              </div>
              <div class="form-group row">
                <label for="Passwort_Conf" class="col-sm-2 form-control-label">Passwort bestätigen</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control form-control-sm" id="confirm-password" placeholder="Passwort" name="confirm-password">
                </div>
              </div>


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Abbrechen</button>
              <button type="submit" class="btn btn-success btn-sm" name="update-submit">Änderungen speichern</button>
            </div>
          </form>

        </div>
      </div>
    </div>
    <!-- /Modales Fenster zur Userdatenaktualisierung-->

  </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
