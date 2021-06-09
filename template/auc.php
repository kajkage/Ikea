<?php
global $con;

$pid = $_GET["auc"];
$sql = "SELECT * FROM actionusernobids where auction_id = '$pid'";

$result = mysqli_query($con, $sql);

 while($auc = mysqli_fetch_array($result)) { ?>
   <a href="?profile=<?php echo $auc['user_id']; ?>"><?php
  echo "Lagt op af: " . $auc['first_name'] . " " . $auc['last_name'] . "</a><br>Titel: " . $auc['title'] . "<br>Text: " . $auc['text'] . "<br>Auktion slutter d. " . $auc['time_end'] . "<br>Mindste pris: " . $auc['min_price'];
 }

if(isset($_POST['submitbid'])) {
  $user_id = $_SESSION['user_id'];
  $newbid = $_POST['newbid'];

$sql = "INSERT INTO bids (bid_user_id, bid_price, auction_id) VALUES ('$user_id', '$newbid', '$pid');";
$result = mysqli_query($con, $sql);

}
?>
<form class="bids" method="post">
  <input type="number" name="newbid">
  <button name="submitbid">Byd</button>
</form>
