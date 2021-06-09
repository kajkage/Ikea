<?php
global $con;

$pid = $_GET["cat"];
$sql = "SELECT * FROM actionusernobids where category_id = '$pid'";

$result = mysqli_query($con, $sql);

 while($auc = mysqli_fetch_array($result)) {
