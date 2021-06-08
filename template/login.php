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
   <a href="?p=2" class="btn">Opret Bruger</a>
 </form>
</div>

<?php

if(isset($_POST['login'])) {

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users";
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

  $_SESSION['user_id'] = $users[$x]['user_id'];
  $_SESSION['user_first_name'] = $users[$x]['first_name'];
  $_SESSION['user_last_name'] = $users[$x]['last_name'];
  $_SESSION['user_adress'] = $users[$x]['adress'];
  $_SESSION['user_postal'] = $users[$x]['postal'];
  $_SESSION['user_phone_number'] = $users[$x]['phone_number'];
  $_SESSION['user_email'] = $users[$x]['email'];

  header("Location: ./index.php?p=3");

  break;
  }
  else {
    $msg = "Brugernavn eller adgangskode er forkert";
  }
}
echo $msg;
}
?>


</body>
</html>
