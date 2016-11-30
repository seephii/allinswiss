<?php
  session_start();
  if(isset($_SESSION["id"])) unset($_SESSION["id"]);
  session_destroy();

  require_once('System/data.php');
  require_once('System/security.php');

  $error = false;
  $error_msg = "";
  $success = false;
  $success_msg = "";


  if(isset($_POST['login-submit'])){
    if(!empty($_POST['email']) && !empty($_POST ['password'])){
      $email = filter_data($_POST['email']);
      $password = filter_data($_POST ['password']);

      $result = login($email, $password);

      $row_count = mysqli_num_rows($result);

      if($row_count == 1){
        $user = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['id'] = $user['user_id'];
        header("Location:home.php");
      }else {
        $error = true;
        $error_msg .= "Leider konnten wir Ihre E-Mailadresse oder Ihr Passwort nicht finden.<br/>";
      }
    }else {
      $error = true;
      $error_msg .= "Bitte füllen Sie beide Felder aus.<br/>";
    }
  }

  if(isset($_POST['register-submit'])){
    if(!empty($_POST['email']) && !empty($_POST ['password']) && !empty($_POST ['confirm-password'])){
      $email = $_POST['email'];
      $password = $_POST ['password'];
      $password_confirm = $_POST ['confirm-password'];
      if ($password == $password_confirm){
        if (register($email, $password)){
        $success = true;
        $success_msg = "Sie haben sich erfolgreich registriert.<br/>";
        $success_msg = "Bitte loggen Sie sich jetzt ein.<br/>";

      }else{
        $error = true;
        $error_msg .="Es gibt ein Problem mit der Datenbankverbindung.";
      }
      }else{
      $error = true;
      $error_msg .="Bitte überprüfen Sie die Passworteingabe.<br/>";
    }
    }else {
      $error = true;
      $error_msg .= "Bitte füllen Sie alle Felder aus.<br/>";
    }
  }
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Allinswiss</title>

    <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet">
  </head>

  <body>
    <!-- http://bootsnipp.com/snippets/featured/login-and-register-tabbed-form -->
    <div class="container">
    	<div class="row">
  			<div class="col-md-6 col-md-offset-3">
  				<div class="panel panel-login">
  					<div class="panel-heading">
  						<div class="row">
  							<div class="col-xs-12">
    							<h3> p42</h3>
  							</div>
  						</div>

  						<div class="row">
  							<div class="col-xs-6">
  								<a href="#" class="active" id="login-form-link">Login</a>
  							</div>
  							<div class="col-xs-6">
  								<a href="#" id="register-form-link">anmelden</a>
  							</div>
  						</div>
  						<hr>
  					</div>
  					<div class="panel-body">
  						<div class="row">
  							<div class="col-lg-12">
  								<!-- Login-Formular -->
  								<form id="login-form" action="index.php" method="post" role="form" style="display: block;">
  									<div class="form-group">
  										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="E-Mail-Adresse" value="">
  									</div>
  									<div class="form-group">
  										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Passwort">
  									</div>
  									<div class="form-group">
  										<div class="row">
  											<div class="col-sm-6 col-sm-offset-3">
  												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="einloggen">
  											</div>
  										</div>
  									</div>
  								</form>
  								<!-- /Login-Formular -->

  								<form id="register-form" action="index.php" method="post" role="form" style="display: none;">
  									<div class="form-group">
  										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="E-Mail-Adresse" value="">
  									</div>
  									<div class="form-group">
  										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Passwort">
  									</div>
  									<div class="form-group">
  										<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Passwort bestätigen">
  									</div>
  									<div class="form-group">
  										<div class="row">
  											<div class="col-sm-6 col-sm-offset-3">
  												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="jetzt registrieren">
  											</div>
  										</div>
  									</div>
  								</form>

  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  		<!-- Die beiden BS-Allert-Boxen geben Rückmeldung über den Registrierungsprozess. Sie werden erst später benötigt. -->
<?php
  if($success == true){
?>
      <div class="alert alert-success" role="alert">Es hat funktioniert.</div>
<?php
  }
?>
<?php
  if($error == true){
?>
      <div class="alert alert-danger" role="alert"><?php echo $error_msg; ?></div>
<?php
  }
?>

      </div><!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script>
      $(function() {

        $('#login-form-link').click(function(e) {
      		$("#login-form").delay(100).fadeIn(100);
       		$("#register-form").fadeOut(100);
      		$('#register-form-link').removeClass('active');
      		$(this).addClass('active');
      		e.preventDefault();
      	});

      	$('#register-form-link').click(function(e) {
      		$("#register-form").delay(100).fadeIn(100);
       		$("#login-form").fadeOut(100);
      		$('#login-form-link').removeClass('active');
      		$(this).addClass('active');
      		e.preventDefault();
      	});

      });
    </script>

  </body>
</html>
