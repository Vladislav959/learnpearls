<?php
$read = $_POST['read'];
setcookie('read', $read, time()+60*60*24*30, "/");
?>