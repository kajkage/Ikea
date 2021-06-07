<?php

if(isset($_POST['login']))

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT email, password FROM users";
global $con;
$result = mysqli_query($con, $sql);
$users = [];
if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)){
    $users[] = $row;
  }
}

for ($x = 0; $x < count($users); $x++){
  if($users[$x]['email'] == $email && $users[$x]['password'] == $pass){
  header("cats.php");

  break;
  }
  else {
    $msg = "Adgangskode eller e-mail er forkert, prøv igen"
    $name = null;
  }
}
?> <p id="message"> <?php  echo $msg ?></p><?php
 ?>
