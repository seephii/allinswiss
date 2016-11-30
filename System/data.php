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

/*Login login.php*/
function login($email, $password)
{
  $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password';";
  return get_result($sql);
}

function register($email, $password){
  $sql = "INSERT INTO user (email, password) VALUES ('$email', '$password');";
  return get_result($sql);
}


function hotelauswahl($sterne, $ort)
{
  $sql = "SELECT * FROM Hotel WHERE sterne = '$sterne' AND SELECT * FROM Ort WHERE id_ort = '$id_ort';";
  return get_result($sql);
}

/* */
function aktivitaetauswahl($aktivitaet)
{
  $sql = "SELECT * FROM Aktivitaeten WHERE id_aktivitaet = '$id_aktivitaet';";
  return get_result($sql);
}

/*Funktion um die Sterne bei der Startseite aus der Datenbank auszuwählen,GROUP BY für doppelte Sachen nur einmal anzeigen, ORDER BY ist die Sortierung*/
function get_sterne() {
  $sql = "SELECT sterne FROM Hotel GROUP BY sterne ORDER BY sterne";
  return get_result($sql);
}
/*Funktion um den Ort bei der Startseite aus der Datenbank auszuwählen,GROUP BY für doppelte Sachen nur einmal anzeigen, ORDER BY ist die Sortierung*/
function get_ort() {
  $sql = "SELECT ort, id_ort FROM Ort GROUP BY ort ORDER BY ort";
  return get_result($sql);
}
/*Funktion um die Aktivität bei der Startseite aus der Datenbank auszuwählen,GROUP BY für doppelte Sachen nur einmal anzeigen, ORDER BY ist die Sortierung*/
function get_aktivitaet() {
  $sql = "SELECT aktivitaet, id_aktivitaet FROM Aktivitaeten GROUP BY aktivitaet ORDER BY aktivitaet";
  return get_result($sql);
}


/* function register($email, $password){
  $sql = "INSERT INTO user (email, password) VALUES ('$email', '$password');";
  return get_result($sql);
} */

/*home.php*/

 ?>
