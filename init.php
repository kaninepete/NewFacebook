<?php
session_start();

require 'general.php';

if (logged_in() === true) {
   $session_user_id = $_SESSION['user_id'];
   $user_data = user_data($session_user_id, 'Name', 'Password');
}

?>