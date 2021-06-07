<?php
include('./header.php');
include('./connect.php');

$sql = "SELECT * FROM auction WHERE category_id = 6";
global $con;
$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_array($result)) {
  echo "Titel: " . $row['title'] . " Tekst: " . $row['text'] . " Slutdato: " . $row['time_end'];
}
