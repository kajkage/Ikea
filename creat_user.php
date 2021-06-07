<?php
include("connect.php");

connect();

$users = users();

if(isset($_POST['creat_user'])) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $adress = $_POST['adress'];
  $postal = $_POST['postal'];
  $phone_number = $_POST['phone_number'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql= "SELECT * from users where email = '$email'";
  $result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result) > 0) {
    echo "Email findes allerede";
  } else {
    $sql = "INSERT INTO users (first_name, last_name, adress, postal, phone_number, email, password)
    VALUES ('$first_name', '$last_name', '$adress', '$postal', '$phone_number', '$email', '$password');";
    $result = mysqli_query($con, $sql);
    //if (mysqli_num_rows($result) > 0) {
      //echo "Bruger er oprettet";
    //}
  }

}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <h2> Oprettelse af bruger til IKEA AUKTIONER </h2>
    <meta charset="utf-8">
    <title>Ny bruger</title>
  </head>
  <body>
<form method="post">
<input type="text" name="first_name" placeholder="Fornavn" required>
<br>
<input type="text" name="last_name" placeholder="Efternavn" required>
<br>
<input type="email" name="email" placeholder="Email" required>
<br>
<input type="text" name="phone_number" placeholder="Nummer" required>
<br>
<input type="text" name="adress" placeholder="Adresse" required>
<br>
<input type="text" name="postal" placeholder="Postnummer" required>
<br>
<input type="password" name="password" placeholder="Adgangskode" required>
<button name="creat_user" type="sumbit" value="create"> opret bruger </button>


</form>

  </body>
</html>
