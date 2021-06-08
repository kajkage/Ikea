<?php
if(isset($_GET["profile"])) {

$pid = $_GET["profile"];
$sql = "SELECT * FROM users where user_id = '$pid'";

$result = mysqli_query($con, $sql);

$profile = mysqli_fetch_array($result);

echo $profile['first_name'];
}
