<?php
if(isset($_GET["profile"])) {

$pid = $_GET["profile"];
$sql = "SELECT * FROM users where user_id = '$pid'";

$result = mysqli_query($con, $sql);

while($profile = mysqli_fetch_array($result)) {
echo "Navn: " . $profile['first_name'] . " " . $profile['last_name'] . "<br>E-mail: " . $profile['email'] . "<br>Telefon: " . $profile['phone_number'];
}
echo "<br><br>Dine aktive auktioner:<br>";
$sql = "SELECT * FROM auctionowner where user_id = '$pid' AND time_end > NOW()";
$result = mysqli_query($con, $sql);
while($aucowner = mysqli_fetch_array($result)) {
  echo "<br> Kategori: " . $aucowner['cat_name'] . "<br> Titel: " . $aucowner['title'] . "<br> Auktionen udløber d. " . $aucowner['time_end'] . "<br>" ?> <a href="?auc=<?php echo $aucowner['auction_id']; ?>"> <?php echo "Gå til auktion</a><br><br>";
}
echo "<br><br>Dine tidligere auktioner:<br>";
$sql = "SELECT * FROM auctionowner where user_id = '$pid' AND time_end < NOW()";
$result = mysqli_query($con, $sql);
while($aucowner = mysqli_fetch_array($result)) {
  echo "<br> Kategori: " . $aucowner['cat_name'] . "<br> Titel: " . $aucowner['title'] . "<br> Auktionen udløber d. " . $aucowner['time_end'] . "<br>" ?> <a href="?auc=<?php echo $aucowner['auction_id']; ?>"> <?php echo "Gå til auktion</a><br><br>";
}
}
