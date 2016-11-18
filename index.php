<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>All in Swiss</title>

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
    <div class="navbar navbar-static-top"> <!--Eine Navbar, die normal scrollt. Eigentlich ist es ja das normale Verhalten.-->
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
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</div>
</nav>

<div class="hello_text">
<div class="container">
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8"> <h1> Wilkommen auf All-in Swiss. <br> Der Ferien Diensleister mit allen Angeboten. <br> Wählen sie bitte die folgenden Felder aus.</h1> </div>
    <div class="col-sm-2"></div>
  </div>
</div>
</div>

<br>
<br>

<!-- Kalender Date picker -->
<div class="container">
    <div class='col-md-offset-3 col-md-3'>
        <div class="form-group">
            <div class='input-group date' id='datetimepicker6'>
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <div class='col-md-3'>
        <div class="form-group">
            <div class='input-group date' id='datetimepicker7'>
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker6').datetimepicker();
        $('#datetimepicker7').datetimepicker({
            useCurrent: false //Important! See issue #1075
        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
    });
</script>


<br>
<br>

<!--Dropdown Menu-->
<div class="dropdown_design">
<div class="row">
    <div class="col-md-offset-4 col-lg-4">
    <div class="input-group">
      <input type="text" class="form-control" aria-label="...">
      <div class="input-group-btn">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ortschaft <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="#">Ort1</a></li>
          <li><a href="#">Ort2</a></li>
          <li><a href="#">Ort3</a></li>
        </ul>
      </div><!-- /btn-group -->

    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
  </div>
  <br>
  <br>
  <div class="col-md-offset-4 col-lg-4">
    <div class="input-group">
      <input type="text" class="form-control" aria-label="...">
      <div class="input-group-btn">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hotel <span class="caret"></span></button>
        <ul class="dropdown-menu dropdown-menu-right">
          <li><a href="#">Hotel1</a></li>
          <li><a href="#">Hotel2</a></li>
          <li><a href="#">Hotel3</a></li>
        </ul>
      </div><!-- /btn-group -->
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
  <br>
  <br>
  <br>
  <br>
  <div class="col-md-offset-4 col-lg-4">
    <div class="input-group">
      <input type="text" class="form-control" aria-label="...">
      <div class="input-group-btn">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Aktivitäten <span class="caret"></span></button>
        <ul class="dropdown-menu dropdown-menu-right">
          <li><a href="#">Aktivität1</a></li>
          <li><a href="#">Aktivität2</a></li>
          <li><a href="#">Aktivität3</a></li>
        </ul>
      </div><!-- /btn-group -->
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
</div>
<!--Dropdown Menu Schluss -->

<br> <br> <br> <br>

<div class="dropdown_ort">
<div class="btn-group" role="group" aria-label="...">
  <button type="button" class="btn btn-default btn-lg">Start</button>
</div>
</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/npm.js"></script>



  </body>
</html>
