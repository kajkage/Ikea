<?php

global $con;

$pid = $_GET["cat"];

$sql = "SELECT cat_name FROM categories WHERE category_id = '$pid'";
$result = mysqli_query($con, $sql);
$catname = mysqli_fetch_array($result);
?><h1 class="catname"><?php echo $catname['cat_name']; ?></h1><br><?php

$sql = "SELECT * FROM actionusernobids where category_id = '$pid' AND time_end > NOW()";
$result = mysqli_query($con, $sql);

 while($auc = mysqli_fetch_array($result)) { ?>
   <a href="?profile=<?php echo $auc['user_id']; ?>"><?php
  echo "Lagt op af: " . $auc['first_name'] . " " . $auc['last_name'] .  "</a><br> Titel: " . $auc['title'] . "<br> Tekst: " . $auc['text'] . "<br> Pris: " . $auc['min_price'] . "<br>" ?> <a href="?auc=<?php echo $auc['auction_id']; ?>"> <?php echo "Byd på dette produkt</a><br><br>";
}
