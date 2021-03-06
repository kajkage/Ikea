<?php
session_start();

define ("DBHOST", "localhost");
define ("DBUSER", "root");
define ("DBPASS", "root");
define ("DBNAME", "ikea");

include('./functions.php');

connect ();

include('./header.php');

if(isset($_GET["p"])) {
  $page = getPage($_GET["p"]);
} elseif (isset($_GET["cat"])) {
  $page = getCatPage($_GET["cat"]);
} elseif (isset($_GET["profile"])) {
  $page = getProfilePage($_GET["profile"]);
} elseif (isset($_GET["auc"])) {
  $page = getAucPage($_GET["auc"]);
} else {
  $page = getPage();
}


if($page == false) {
  include('template/404page.php');
} elseif($page['template'] && file_exists('template/' . $page['template'])) {
  include('template/' . $page['template']);
} else {
  include('template/login.php');
}
