<?php

function user_data($user_id){
  $data = array();
  $user_id = (int)$user_id;

  $func_num_args = func_num_args();
  $func_get_args = func_get_args();

  if ($func_num_args > 1) {
    unset($func_get_args[0]);
    $fields = implode('', $func_get_args);
  }
  print_r($func_get_args);
}

function logged_in() {
  return (Isset($_SESSION[user_id])) ? true : false;
}
?>