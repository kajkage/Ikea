<?php

if(isset($_POST['creat_auction'])) {
$category_id = $_POST['category_id'];
$title = $_POST['title'];
$text = $_POST['text'];
$time_end = $_POST['time_end'];

$sql = "INSERT INTO auction (category_id, title, `text`, time_end)
VALUES ('$category_id', '$title', '$text_to_page', '$time_end');";
$result = mysqli_query($con, $sql);


$min_price = $_POST['min_price'];

$sql = "INSERT INTO bids (min_price)
VALUES ('$min_price');";
$result = mysqli_query($con, $sql);
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <h2> Oprettelse af auction hos IKEA </h2>
  </head>
  <body>
    <form method="post">
      <input type="text" name="category_id" placeholder="Kategori" required>
      <br>
      <input type="text" name="title" placeholder="Overskrift" required>
      <br>
      <input type="text" name="text" placeholder="Produkt Info" required>
      <br>
      <input type="date" name="time_end" placeholder="Slut tidspunkt" required>
      <br>
      <button name="creat_auction" type="sumbit" value="create"> Opret Auction </button>

    </form>
  </body>
</html>