<?php

function get_db_connection()
{
  $db = mysqli_connect('localhost', '735080_3_1', 'TVuz=g3QWLwa', '735080_3_1')
    or die('Fehler beim Verbinden mit dem Datenbank-Server');
  mysqli_set_charset($db, "utf8");
  return $db;
}

function get_result($sql)
{
  $db = get_db_connection();
  $result = mysqli_query($db, $sql);
  mysqli_close($db);
  return $result;
}
/*Login index.php*/
function login($email, $password)
{
  $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password';";
  return get_result($sql);
}

function register($email, $password){
  $sql = "INSERT INTO user (email, password) VALUES ('$email', '$password');";
  return get_result($sql);
}

/*home.php*/

function write_post($posttext, $owner)
{
  $sql = "INSERT INTO posts (text, owner) VALUES ('$posttext', '$owner');";
  return get_result($sql);
}

 ?>
