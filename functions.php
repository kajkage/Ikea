<?php
$con = null;

function connect() {

  global $con;

  $con = mysqli_connect(DBHOST, DBUSER, DBPASS);

  if(!$con){
    die(mysqli_error($con));
}
mysqli_select_db($con, DBNAME);
}
?>
