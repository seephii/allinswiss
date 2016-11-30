<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>All in Swiss</title>

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

<!-- Kalender Date picker
<div class="container">
  <div class="row">
  <div class="col-md-offset-4 col-md-4">
  <form>
    <div class="form-inline">
        <div class='form-group date' id='datetimepicker6'>

            <input type='text' class="form-control" />
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>

        </div>
        <div class='form-group date' id='datetimepicker7'>

            <input type='text' class="form-control" />
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>

        </div>
</div>

<div class="form-group col-md-offset-4 col-md-2">
    <div class='input-group date' id='datetimepicker6'>
        <input type='text' class="form-control" />
        <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
        </span>
    </div>
</div>
<div class="form-group col-md-2">
    <div class='input-group date' id='datetimepicker7'>
        <input type='text' class="form-control" />
        <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
        </span>
    </div>
</div>


<script type="text/javascript" >
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
Ende Date Picker-->

<form method="POST" action="auswahl.php">
<div class="container">
  <div class="row">
  <div class="col-md-offset-4 col-md-4">
      <div class="input-group col-md-12">
        <label for="beispielFeldEmail1">Sterne</label>
        <select class="form-control">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>

      <div class="input-group col-md-12">
        <label for="beispielFeldEmail1">Ortschaft</label>
        <select class="form-control">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
        </select>
      </div>

      <div class="input-group col-md-12">
        <label for="beispielFeldEmail1">Aktivität</label>
        <select class="form-control">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
        </select>
      </div>
    </div>
</div>

<div class="container">
  <div class="col-md-offset-4 col-md-4">
    <p> * Damit ihre Daten gespeichert werden, loggen sie sich bitte ein! </p>
  </div>
</div>

<!-- Start Button (default and split) -->
<br> <br>

<div class="container">
<div class="dropdown_ort">
<div class="btn-group" role="group" aria-label="...">
  <input type="submit" value="Start">
</div>
</div>
</div>
</form>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/npm.js"></script>



  </body>

</html>
