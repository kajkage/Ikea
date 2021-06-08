<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>IKEA AUKTION</title>
  </head>
  <body>
    <?php foreach(getNav() as $navpage) { ?>
    <li>
      <a href="?p=<?php echo $navpage['page_id']; ?>">
        <?php echo $navpage['pagename']; ?>
      </a>
    </li>
    <?php } ?>
