<?php
$conn = null;

function connect() {

  global $conn;

  $conn = mysqli_connect(DBHOST, DBUSER, DBPASS);

  if(!$conn){
    die(mysqli_error($conn));
}
mysqli_select_db($conn, DBNAME);
}
include("connect.php")
?>
