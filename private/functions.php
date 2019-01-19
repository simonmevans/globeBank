<?php

function url_for($script_path) {
  // add the leading '/' if not present
  if($script_path[0] != '/') {
    $script_path = "/" . $script_path;
  }
  return WWW_ROOT . $script_path;
}

function u ($string=""){
  return urlencode($string);
}

function raw_u ($string=""){
  return rawurlencode($string);
}

function h($string=""){
  return htmlspecialchars ($string);
}
function error404 (){
  header("HTTP/1.1 404 Not Found ");
  exit();
}
function error500 (){
  header($_SERVER['SERVER_PROTOCOL']. " 500 internal server error");
  exit();
}
function redirectTo($location){
  header('Location: '. $location);
  exit();
}
function is_post_request() {
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get_request() {
  return $_SERVER['REQUEST_METHOD'] == 'GET';
}
?>
