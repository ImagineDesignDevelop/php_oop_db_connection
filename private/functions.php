<?php

function redirect($location){
  header("Location: {$location}");
}

function the_date($date){
  $date = strtotime($date);
  $date = date('M d, Y', $date);
  return $date;
}

function formatPhone($phone){
  $unformattedPhone = $phone;
  $phone = preg_replace("/[^0-9]/", "", $phone);
  

  if(strlen($phone) == 7)
    return preg_replace("/([0-9]{3})([0-9]{4})/", "$1-$2", $phone);
  elseif(strlen($phone) == 10)
    return preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "($1) $2-$3", $phone);
  elseif(strlen($phone) == 11 && substr($phone, 0, 1) != '1')
    return preg_replace("/([0-9]{3})([0-9]{4})([0-9]{4})/", "$1-$2 ext. $3", $phone);
  elseif(strlen($phone) == 11 && substr($phone, 0, 1) == '1')
    return preg_replace("/([0-9]{1})([0-9]{3})([0-9]{3})([0-9]{4})/", "($2) $3-$4", $phone);  
  elseif(strlen($phone) == 14)
    return preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})([0-9]{4})/", "($1) $2-$3 ext. $4", $phone);  
  else
    return $unformattedPhone;
}

function currency($var){
  return number_format((float)$var, 2, '.', '');
}


function url_for($script_path) {
  // add the leading '/' if not present
  if($script_path[0] != '/') {
    $script_path = "/" . $script_path;
  }
  return WWW_ROOT . $script_path;
}

function u($string="") {
  return urlencode($string);
}

function raw_u($string="") {
  return rawurlencode($string);
}

function h($string="") {
  return htmlspecialchars($string);
}

function error_404() {
  header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
  exit();
}

function error_500() {
  header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
  exit();
}

function redirect_to($location) {
  header("Location: " . $location);
  exit;
}

function is_post_request() {
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get_request() {
  return $_SERVER['REQUEST_METHOD'] == 'GET';
}

// PHP on Windows does not have a money_format() function.
// This is a super-simple replacement.
if(!function_exists('money_format')) {
  function money_format($format, $number) {
    return '$' . number_format($number, 2);
  }
}

?>
