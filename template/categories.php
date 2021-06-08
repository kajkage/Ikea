<?php


$sql= "SELECT category_id, cat_name FROM categories";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
        echo "categories: "  . $row["cat_name"]. "<br>";
    }
}
function getCusPage($pid = null) {
  global $con;

  if($pid != null) {
    $sql = 'SELECT * FROM pages WHERE id = 6';
  }

  $page = mysqli_query($con, $sql);

  if(mysqli_num_rows($page) > 0) {
    return mysqli_fetch_assoc($page);
  }
  return false;


?>
