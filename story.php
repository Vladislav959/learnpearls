<?php
$name = $_POST['data-name'];
echo $name;
setcookie('stories',$name,time() + 60*60*24*30,'/');
?>