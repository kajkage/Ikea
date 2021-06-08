<?php

global $conn;

$pid = $_GET["c"];
$sql = "SELECT * FROM auction where category_id = '$pid'";

$result = mysqli_query($con, $sql);
$auc = [];
if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $auc[] = $row;
  }
}

echo "Titel: " . $auc[0]['title'] . "<br> Tekst: " . $auc[0]['text'];
