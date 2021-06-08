<?php


$sql= "SELECT category_id, cat_name FROM categories";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
        ?><a href="?auc=<?php echo $row['category_id']; ?>"> <?php echo $row["cat_name"]. "<br>";
    }
}

?>
