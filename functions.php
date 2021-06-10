<?php

$con = null;

function connect() {

  global $con;

  $con = mysqli_connect(DBHOST, DBUSER, DBPASS);

  if(!$con){
    die(mysqli_error($con));
}
mysqli_select_db($con, DBNAME);
}

function users() {

global $con;

$sql = "SELECT * from users where user_id > 0";

$result = mysqli_query($con, $sql);

$users = [];
if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
    $users[] = $row;
  }
  }
return $users;
}

function getPage($pid = null) {
  global $con;

  if($pid != null) {
    $sql = 'SELECT * FROM pages where page_id = "' . $pid . '"';
} else {
    $sql = 'SELECT * FROM pages WHERE frontpage = 1';
  }
  $page = mysqli_query($con, $sql);

  if(mysqli_num_rows($page) > 0) {
    return mysqli_fetch_assoc($page);
  }
  return false;
}

function getNav() {
  global $con;

  $sql = 'SELECT page_id, pagename FROM pages WHERE page_id = 1 OR page_id = 3 OR page_id = 5 OR page_id = 4 OR page_id = 9';
  $result = mysqli_query($con, $sql);
  $nav = [];

  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)) {
      $nav[] = $row;
    }
  }
  return $nav;
}

function debug($data) {
  echo '<pre>';
  print_r($data);
  echo '</pre>';
}

function getCatPage($pid = null) {
  global $con;

  if($pid != null) {
    $sql = 'SELECT * FROM pages WHERE page_id = 6';
  }

  $page = mysqli_query($con, $sql);

  if(mysqli_num_rows($page) > 0) {
    return mysqli_fetch_assoc($page);
  }
  return false;
}
function getProfilePage($pid = null) {
  global $con;

  if($pid != null) {
    $sql = 'SELECT * FROM pages WHERE page_id = 4';
  }

  $page = mysqli_query($con, $sql);

  if(mysqli_num_rows($page) > 0) {
    return mysqli_fetch_assoc($page);
  }
  return false;
}

function getAucPage($pid = null) {
  global $con;

  if($pid != null) {
    $sql = 'SELECT * FROM pages WHERE page_id = 8';
  }

  $page = mysqli_query($con, $sql);

  if(mysqli_num_rows($page) > 0) {
    return mysqli_fetch_assoc($page);
  }
  return false;
}
function getLargestbid($aucid) {
  global $con;

  $sql = "SELECT MAX(bid_price) FROM winnindbids WHERE auction_id = $aucid";
  $result = mysqli_query($con, $sql);

  if(mysqli_num_rows($result) > 0) {
    return mysqli_fetch_assoc($result);
}
return false;
}
