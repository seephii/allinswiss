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

/* mit LEFT JOIN/USING nimmt er der gewählte Ort und vergeicht ihn mit der Datenbank*/
function hotelauswahl($sterne, $id_ort)
{
  $sql = "SELECT * FROM Hotel LEFT JOIN Ort USING (id_ort) WHERE sterne = '$sterne' AND id_ort = '$id_ort';";
  return get_result($sql);
}

/*Nimmt die aktivität von der Liste Aktivitäten und Beziehung_dl_aktivi und schaut wo die aktivität in Aktivitäten der aktivität in den Beziehungen entspricht und setzt die id Dienstleister den ausgewählten Dienstleister gleich*/
function dienstleisterauswahl($id_dienstleister)
{
  $sql = "SELECT aktivitaet FROM Aktivitaeten, Beziehung_dl_aktivi WHERE Aktivitaeten.id_aktivitaet = Beziehung_dl_aktivi.id_aktivitaet AND id_dienstleister = '$id_dienstleister';";
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
function get_dienstleister() {
  $sql = "SELECT dienstleister, id_dienstleister FROM Dienstleister GROUP BY dienstleister ORDER BY dienstleister";
  return get_result($sql);
}


/* function register($email, $password){
  $sql = "INSERT INTO user (email, password) VALUES ('$email', '$password');";
  return get_result($sql);
} */

/*home.php*/

 ?>
