<?php 
$isbeta = $_POST['isbeta'];
setcookie('isbeta', $isbeta, time()+60*60*24*30, "/");
echo $_COOKIE['isbeta'];
?>