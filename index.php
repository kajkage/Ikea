<?php
session_start();

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Log ind eller opret bruger</title>
  </head>
  <body>
<div class="container">
  <form method="post">
    <h1>Log ind</h1>
    <div class="login">
      <label for="email">E-mail</label>
      <input type="email" name="email" placeholder="Indtast email her" class="login_email" required>
      <label for="password">Adgangkode</label>
      <input type="password" name="password" placeholder="Tast kode her" class="login_password" required>
    </div>

   <button type="submit" name="login" value="login">Log ind</button> <br>
   <a href="creat_user.php" class="btn">Opret Bruger</a>
 </form>
</div>

<?php
include('connect.php');

if(isset($_POST['login'])) {

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
  if($users[$x]['email'] == $email && $users[$x]['password'] == $password){
  header("Location: ./creat_user.php");

  break;
  }
  else {
    echo "Adgangskode eller e-mail er forkert, prøv igen";
  }
}
} ?>


</body>
</html>
