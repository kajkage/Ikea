<?php
if(isset($_GET["profile"])) {

  $pid = $_GET["profile"];
  $sql = "SELECT * FROM users where user_id = '$pid'";

  $result = mysqli_query($con, $sql);

  while($profile = mysqli_fetch_array($result)) {
    echo "Navn: " . $profile['first_name'] . " " . $profile['last_name'] . "<br>E-mail: " . $profile['email'] . "<br>Telefon: " . $profile['phone_number'];
  }
  echo "<br><br>Dine aktive auktioner:<br>";

  $sql = "SELECT * FROM actionusernobids where user_id = '$pid' AND time_end > NOW()";

  $result = mysqli_query($con, $sql);
  while($aucowner = mysqli_fetch_array($result)) {
    echo "<br> Kategori: " . $aucowner['cat_name'] . "<br> Titel: " . $aucowner['title'] . "<br> Auktionen udløber d. " . $aucowner['time_end'] . "<br>" ?> <a href="?auc=<?php echo $aucowner['auction_id']; ?>"> <?php echo "Gå til auktion</a><br><br>";
  }
  echo "<br><br>Dine tidligere auktioner:<br>";

  $sql = "SELECT * FROM actionusernobids where user_id = '$pid' AND time_end < NOW()";

  $result = mysqli_query($con, $sql);
  while($aucowner = mysqli_fetch_array($result)) {
    echo "<br> Kategori: " . $aucowner['cat_name'] . "<br> Titel: " . $aucowner['title'] . "<br> Auktionen udløber d. " . $aucowner['time_end'] . "<br>" ?> <a href="?auc=<?php echo $aucowner['auction_id']; ?>"> <?php echo "Gå til auktion</a><br><br>";
  }
  echo "<br><br>Vundede auktion";

  $sql = "SELECT auction_id, cat_name, time_end, user_id, first_name, last_name, title, `text`, bid_price FROM winnindbids WHERE user_id = '$pid' AND auction_id = 4 ORDER BY bid_price DESC LIMIT 1";
  $result = mysqli_query($con, $sql);

  while($aucwinner = mysqli_fetch_array($result)) {

    $sql = "SELECT bid_price FROM bids WHERE auction_id = 4 ORDER BY bid_price DESC LIMIT 1";
    $result = mysqli_query($con, $sql);
    $largestbid = mysqli_fetch_array($result);

    if($aucwinner['time_end'] < date("Y-m-d H:i:s") && $aucwinner['bid_price'] >= $largestbid[0] && $aucwinner['user_id'] == $pid) {
    echo "<br> Kategori: " . $aucwinner['cat_name'] . "<br> Titel: " . $aucwinner['title'] . "<br>Pris: " . $aucwinner['bid_price'] . "<br> Auktionen udløb d. " . $aucwinner['time_end'] . "<br>";
  }
  }
}
