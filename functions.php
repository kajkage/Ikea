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

function users(){

global $con;

$sql = "SELECT * from users where user_id > 0";

$result = mysqli_query($con, $sql);

$users = [];
if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
    $users[] = $row;
  }
  }
return $users;
}
