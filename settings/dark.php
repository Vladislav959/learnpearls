<?php ini_set('error_reporting', E_ALL);ini_set('display_errors', 1);ini_set('display_startup_errors', 1);
$isdark = $_POST['isdark'];
setcookie('isdark', $isdark, time()+60*60*24*30, "/");
setcookie('ismini', " drop-down--active", time()+60*60*24*30, "/");
?>
<script>
location.href="/settings/";</script>