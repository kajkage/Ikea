<?php

if(isset($_POST['creat_auction'])) {
$user_id = $_SESSION['user_id'];
$category_id = $_POST['category'];
$title = $_POST['title'];
$text = $_POST['text'];
$time_end = $_POST['time_end'];


$min_price = $_POST['min_price'];
$bid_price = $_POST['bid_price'];

$sql = "INSERT INTO bids (min_price, bid_price)
VALUES ('$min_price', '$bid_price');";
$result = mysqli_query($con, $sql);

if (mysqli_query($con, $sql)){
  $last_id = mysqli_insert_id($con);
}

$sql = "INSERT INTO auction (category_id, title, `text`, time_end, user_id, bid_id)
VALUES ('$category_id', '$title', '$text', '$time_end', '$user_id', '$last_id');";
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
      <select name="category">
        <option>Kategori</option>
        <?php
        $sql = "SELECT * FROM categories";
         $result = mysqli_query($con, $sql);
         $rows =[];
         while ($row = mysqli_fetch_array($result)){
           $rows[] = $row;
         }

         ?>
        <?php foreach ($rows as $row){ ?>
          <option value="<?php echo $row["category_id"]; ?>" name="category"> <?php echo $row["cat_name"]; ?> </option>
        <?php } ?>

       </select>
      <br>
      <input type="text" name="title" placeholder="Overskrift" required>
      <br>
      <input type="text" name="text" placeholder="Produkt Info" required>
      <br>
      <input type="text" name="min_price" placeholder="Mindste pris" required>
      <br>
      <input type="text" name="bid_price" placeholder="Mindste pris" required>
      <br>
      <lable for="time_end">Slut tidspunkt</lable>
      <br>
      <input type="datetime-local" name="time_end" placeholder="Slut tidspunkt" required>
      <br>
      <button name="creat_auction" type="sumbit" value="create"> Opret Auction </button>



    </form>
  </body>
</html>
