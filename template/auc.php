<?php
global $con;

$pid = $_GET["auc"];
$sql = "SELECT * FROM actionusernobids where category_id = '$pid'";

$result = mysqli_query($con, $sql);

 while($auc = mysqli_fetch_array($result)) {
echo "Titel: " . $auc['title'] . "<br>Text: " . $auc['text'] . "<br>Auktion slutter d. " . $auc['time_end'];
 }
