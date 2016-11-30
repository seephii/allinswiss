<?php

function get_db_connection()
{
  $db = mysqli_connect('localhost', '548005_4_1', 'GdETBNFSWM@P', '548005_4_1')
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
function hotelauswahl($sterne, $ort)
{
  $sql = "SELECT * FROM Hotel WHERE sterne = '$sterne' AND SELECT * FROM Ort WHERE ort = '$ort';";
  return get_result($sql);
}

function aktivitaetauswahl($aktivitaet)
{
  $sql = "SELECT * FROM Aktivitaeten WHERE aktivitaet = '$aktivitaet';";
  return get_result($sql);
}

/* function register($email, $password){
  $sql = "INSERT INTO user (email, password) VALUES ('$email', '$password');";
  return get_result($sql);
} */

/*home.php*/

 ?>
