<?php
include('init.php');
include('dbconnect.php');


function login($username, $password) {
  $user_id = user_id_from_username($username);
  
  $username = sanitize($username);
  $password = md5($password);

  $query = mysql_query("SELECT COUNT(`User_id`) FROM `User` WHERE `Name` = '$username' AND `Password` = '$password'");

  return (mysql_result($query, 0) == 1) ? $user_id : false ;
}

if (empty($_POST) === false) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (empty($username) || empty($password)) {
     echo "You need to enter a username and password";
  }
  else if (user_exists($username) === false) {
       echo "We can't find that username. Have you registered?";
  }
  else {
    $login = login($username, $password);
    if ($login === false){
      echo "login failed. Password ".$password." does not match username ".$username.".";
    }
    else {
      $_SESSION['user_id'] = $login;
      header('Location: index.php');
      exit();
    }
  }
}

//extra comment

?>
