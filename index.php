<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Log ind eller opret bruger</title>
  </head>
  <body>
<div class="container">
  <form action="">
    <h1>Log ind</h1>
    <div class="login">
      <label for="">Email</label>
      <input type="email" name="email" class="login_email" required>
    </div>
    <div class="login">
      <label for="">Password</label>
      <input type="password" name="password" class="login_password" required>
    </div>

   <button type="submit" name="login">
   <a href="creat_user.php" class="btn">Opret Bruger</a>
</div>

</body>
</html>

<?php
include('connect.php');
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
    $msg = "Adgangskode eller e-mail er forkert, prøv igen";
  }
}
?> <p id="message"> <?php  echo $msg ?></p><?php
 ?>
