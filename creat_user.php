<?php
include("functions.php");

connect();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <h2> Oprettelse af bruger til IKEA AUKTIONER </h2>
    <meta charset="utf-8">
    <title>Ny bruger</title>
  </head>
  <body>
<input type="text" name="fornavn" placeholder="fornavn" required>
<br>
<input type="text" name="efternavn" placeholder="efternavn" required>
<br>
<input type="email" name="email" placeholder="email" required>
<br>
<input type="text" name="nummer" placeholder="nummer" required>
<br>
<input type="text" name="adresse" placeholder="adresse" required>
<br>
<input type="text" name="postnummer" placeholder="postnummer" required>
<br>
<input type="password" name="postnummer" placeholder="adgangskode" required>
<br>
<input type="password" name="postnummer" placeholder="adgangskode" required>
<br>
<input type="password" name="repeatpassword" placeholder="bekræft adgangskode" required>

  </body>
</html>
