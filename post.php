<?php
$Owner = $_POST['Owner'];
$Content = $_POST['Content'];

#mysql_connect("localhost","kaninepe_neat","1admin") or die(mysql_error());

echo "It worked!";
echo $Owner;
echo $Content;
?>