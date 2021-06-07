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
