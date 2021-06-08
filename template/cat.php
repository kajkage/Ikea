<?php

global $conn;

$pid = $_GET["auc"];
$sql = "SELECT * FROM auctionuser where category_id = '$pid'";

$result = mysqli_query($con, $sql);

 while($auc = mysqli_fetch_array($result)) { ?>
   <a href="?profile=<?php echo $auc['user_id']; ?>"><?php
  echo "Lagt op af: " . $auc['first_name'] . " " . $auc['last_name'] .  "</a><br> Titel: " . $auc['title'] . "<br> Tekst: " . $auc['text'] . "<br> Pris: " . $auc['bid_price'] . "<br>";
}
