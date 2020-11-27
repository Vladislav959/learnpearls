<?php
if(!isset($_COOKIE['modalclosed']) and isset($_POST['modalclosing'])){
    setcookie('modalclosed',1,time()+60*60*24*30,'/');
}
else{
    exit('error');
}
?>