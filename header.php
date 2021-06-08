<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>IKEA AUKTION</title>
  </head>
  <body>
    <?php foreach(getNav() as $navpage) {
      if($navpage['page_id'] == 4) { ?>
        <li>
        <a href="?profile=<?php echo $_SESSION['user_id']; ?>">
          <?php echo $navpage['pagename'];
      } else { ?>
      <a href="?p=<?php echo $navpage['page_id']; ?>">
        <?php echo $navpage['pagename']; ?>
      </a>
    </li>
  <?php } } ?>
