<?php
include("connect.php");
connect();

$sql= "SELECT category_id, cat_name FROM categories";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
        echo "categories: "  . $row["cat_name"]. "<br>";
    }
}

?>
