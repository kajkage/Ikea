<?php
if(isset($_GET["profile"])) {

  $pid = $_GET["profile"];
  $sql = "SELECT * FROM users where user_id = '$pid'";

  $result = mysqli_query($con, $sql);

  while($profile = mysqli_fetch_array($result)) {
    echo "Navn: " . $profile['first_name'] . " " . $profile['last_name'] . "<br>E-mail: " . $profile['email'] . "<br>Telefon: " . $profile['phone_number'];
  }
  echo "<br><br>Aktive auktioner:<br>";

  $sql = "SELECT * FROM actionusernobids where user_id = '$pid' AND time_end > NOW()";

  $result = mysqli_query($con, $sql);
  while($aucowner = mysqli_fetch_array($result)) {
    echo "<br> Kategori: " . $aucowner['cat_name'] . "<br> Titel: " . $aucowner['title'] . "<br> Auktionen udløber d. " . $aucowner['time_end'] . "<br>" ?> <a href="?auc=<?php echo $aucowner['auction_id']; ?>"> <?php echo "Gå til auktion</a><br><br>";
  }
  echo "<br><br>Tidligere auktioner:<br>";

  $sql = "SELECT * FROM actionusernobids where user_id = '$pid' AND time_end < NOW()";

  $result = mysqli_query($con, $sql);
  while($aucowner = mysqli_fetch_array($result)) {
    echo "<br> Kategori: " . $aucowner['cat_name'] . "<br> Titel: " . $aucowner['title'] . "<br> Auktionen udløb d. " . $aucowner['time_end'] . "<br>" ?> <a href="?auc=<?php echo $aucowner['auction_id']; ?>"> <?php echo "Gå til auktion</a><br><br>";
  }
  echo "<br><br>Vundede auktion<br><br>";

    //$sql = "SELECT bid_price FROM largestbids where bid_user_id = '$pid'";
    $sql = "SELECT * FROM userbids where user_id = '$pid' AND time_end < NOW()";
    $result = mysqli_query($con, $sql);
    while($userlargestbid = mysqli_fetch_array($result)) {
      if($userlargestbid['bid_price'] == getLargestbid($userlargestbid['auction_id'])) {
        echo "<br> Kategori: " . $userlargestbid['cat_name'] . "<br> Titel: " . $userlargestbid['title'] . "<br> Auktionen udløb d. " . $userlargestbid['time_end'] . "<br>Vindende bud: " . $userlargestbid['bid_price'] . "<br>Vinder: " . $userlargestbid['first_name'] . " " .  $userlargestbid['last_name']; ?> <a href="?auc=<?php echo $userlargestbid['auction_id']; ?>"> <?php echo "Gå til auktion</a><br><br>";

    } else {
      echo " ";
    }

    }
  }
