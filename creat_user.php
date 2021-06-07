<?php
include("functions.php");

connect();
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$adress = $_POST['adress'];
$postal = $_POST['postal'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$password = $_POST['password'];

$sgl = "INSERT INTO users (first_name, last_name, adress, postal, phone_number, email, password)
VALUES ('$first_name', '$last_name', '$adress', '$postal', '$phone_number', '$email', '$password');";
$result = mysqli_query($con, $sql);


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <h2> Oprettelse af bruger til IKEA AUKTIONER </h2>
    <meta charset="utf-8">
    <title>Ny bruger</title>
  </head>
  <body>
<input type="text" name="fornavn" placeholder="Fornavn" required>
<br>
<input type="text" name="efternavn" placeholder="Efternavn" required>
<br>
<input type="email" name="email" placeholder="Email" required>
<br>
<input type="text" name="nummer" placeholder="Nummer" required>
<br>
<input type="text" name="adresse" placeholder="Adresse" required>
<br>
<input type="text" name="postnummer" placeholder="Postnummer" required>
<br>
<input type="password" name="postnummer" placeholder="Adgangskode" required>
<br>
<input type="password" name="postnummer" placeholder="Adgangskode" required>
<br>
<input type="password" name="repeatpassword" placeholder="Bekræft adgangskode" required>

  </body>
</html>
