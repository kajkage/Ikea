<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/header.css"
    <meta charset="utf-8">
    <title>IKEA AUKTION</title>

  </head>
  <body>
    <div class="navbar">
      <img scr="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Ikea_logo.svg/1200px-Ikea_logo.svg.png" width="1000" height="500" alt="logo"/>

    <?php foreach(getNav() as $navpage) {
      if($navpage['page_id'] == 4 && ! empty($_SESSION['logged_in'])) { ?>
        <li>
        <a href="?profile=<?php echo $_SESSION['user_id']; ?>">
          <?php echo $navpage['pagename'];
      }
      if ($navpage['page_id'] == 9 && ! empty($_SESSION['logged_in'])) { ?>
        <li>
        <a href="?p=<?php echo $navpage['page_id']; ?>">
          <?php echo $navpage['pagename'] . "</a><br>";
      }
    if ($navpage['page_id'] == 1) { ?>
      <li><a href="?p=<?php echo $navpage['page_id']; ?>">
        <?php echo $navpage['pagename']; ?>
      </a> <?php
    }
    if ($navpage['page_id'] == 3) { ?>
      <li><a href="?p=<?php echo $navpage['page_id']; ?>">
        <?php echo $navpage['pagename']; ?>
      </a> <?php
    }
    if ($navpage['page_id'] == 5) { ?>
      <li><a href="?p=<?php echo $navpage['page_id']; ?>">
        <?php echo $navpage['pagename'] . "<br>"; ?>
      </a> <?php
    }
  }
  ?>
</div>
