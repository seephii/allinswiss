<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title><br>

    <!-- Bootstrap -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

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
      <a class="navbar-brand" href=index.php>All-in-Swiss</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="auswahl.php"> Hotelauswahl <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="login.php"> Login <span class="sr-only">(current)</span></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="hello_text">
<div class="container">
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8"> <h3> Loggen Sie sich bitte in ihr Account ein, um das Angebot zu buchen.</h3> </div>
    <div class="col-sm-2"></div>
  </div>
</div>
</div>

<br>
<br>

    <div class="container">
          <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <a href="#" class="active" id="login-form-link">Login</a>
                  </div>
                  <div class="col-xs-6">
                    <a href="#" id="register-form-link">Register</a>
                  </div>
                </div>
                <hr>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-lg-12">
                    <form id="login-form" action="http://phpoll.com/login/process" method="post" role="form" style="display: block;">
                      <div class="form-group">
                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                      </div>
                      <div class="form-group">
                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                      </div>
                      <div class="form-group text-center">
                        <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                        <label for="remember"> Remember Me</label>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-6 col-sm-offset-3">
                            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="text-center">
                              <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                    <form id="register-form" action="http://phpoll.com/register/process" method="post" role="form" style="display: none;">
                      <div class="form-group">
                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                      </div>
                      <div class="form-group">
                        <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                      </div>
                      <div class="form-group">
                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-6 col-sm-offset-3">
                            <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
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
      </div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
